<html>
    <head>
        <link rel="shortcut icon" href="style/favicon.png" type="image/png" />
        <link rel="icon" href="style/favicon.png" type="image/png" />
        <link rel="stylesheet" href="style/style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="style/minecraft-webfont.css" />
        <title>SethBling's Loot table randomizer.</title>
    </head>
    <body>
        <div id="content">
            <h1>SethBling's Loot table randomizer.</h1>
            <form action="loot_table_randomizer.php" method="post">
                <div id="inputs">
                    <input type="number" autocomplete="off" name="seed" placeholder="(optional) Enter seed here" />
                    <input type="submit" value="Generate"/>
                </div>
            </form>
            <p id="text">
                Note: Seeds from the python version will not produce the same result in this version.
                Even though Python and PHP supposedly use the same randomization algorithm (Mersenne Twister), they produce different results.
                If someone has a solution for this, then please <a href="https://fasguy.ga/discord" target="_blank" rel="noreferrer">contact me on discord</a>.
            </p>
            <p>
                DISCLAIMER: I (Fasguy) am not affiliated with SethBling or Mojang in any way. I just ported this to PHP so you don't have to install python.
            </p>
        </div>
        <div id="footer">
            <div id="version">
                <a href="https://github.com/Fasguy/sb-ltr" target="_blank" rel="noreferrer">Version 1.0.3</a>
            </div>
            <div id="additional">
                <a href="https://www.youtube.com/user/sethbling" target="_blank" rel="noreferrer">SethBling's YouTube Channel</a>
                <a href="https://www.youtube.com/user/FasguyLP" target="_blank" rel="noreferrer">Fasguy's YouTube Channel</a>
            </div>
        </div>
    </body>
</html>