<?php
    $fp = fopen('data.csv', 'a');
    fwrite($fp, $_GET["name"] . ';' . $_GET["mail"] . "\r\n");
    fclose($fp);

?>

<html>
    <head>
    </head>
    <body>
        Bien reçu, à bientôt
    </body>
</html>
