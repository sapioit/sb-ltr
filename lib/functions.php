<?php

function Kill() {
    if (file_exists($_SESSION["file"])) unlink($_SESSION["file"]);  //Remove the file afterwards

    $_SESSION = array();                //Reset the session variables

    if (ini_get("session.use_cookies")) {               //Delete session cookies
        $params = session_get_cookie_params();          //*
        setcookie(session_name(), '', time() - 42000,   //*
            $params["path"], $params["domain"],         //*
            $params["secure"], $params["httponly"]      //*
        );                                              //*
    }                                                   //*

    ini_set('session.gc_maxlifetime', 0);   //Session Garbage collection
    ini_set('session.gc_probability', 1);   //*
    ini_set('session.gc_divisor', 1);       //*

    session_destroy();                  //Destroy session
}

$configTable = array(
    'A', 'C', 'D', 'E', 'F', 'G', 'I', 'M', 'N', 'O', 'R', 'S', 'T', 'U', 'Y', 'Z'
    //Fasguy Minecraft Randomized
);

function encodeConfig($bits) {
    global $configTable;

    $configCode = "";
    while(strlen($bits) % 4 !== 0) {
        $bits .= '1';
    }
    $bits = str_split($bits, 4);
    for($i = 0; $i < count($bits); $i++) {
        $configCode .= $configTable[bindec($bits[$i])];
    }
    return validateConfig($configCode);
}

function decodeConfig($configCode) {
    global $configTable;

    $configCode = validateConfig($configCode);
    $bits = "";
    for($i = 0; $i < strlen($configCode); $i++) {
        $bits .= sprintf("%04d", decbin((int)array_search($configCode[$i], $configTable, true)));
    }
    return $bits;
}

function validateConfig($configCode) {
    global $configTable;

    $validCode = "";
    for($i = 0; $i < strlen($configCode); $i++) {
        if(in_array($configCode[$i], $configTable, true))
            $validCode .= $configCode[$i];
    }
    return $validCode;
}

?>