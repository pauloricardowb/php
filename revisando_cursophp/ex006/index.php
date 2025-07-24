<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        // Superglobais do PHP
        
        setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

        echo "<h1>Superglobal COOKIE<h1>";
        var_dump($_COOKIE);

        echo "--------------";

        echo "<h1>Superglobal GET</h1>";
        var_dump($_GET);

        echo "---------------";

        echo "<h1>Superglobal POST</h1>";
        var_dump($_POST);

        echo "---------------";

        echo "<h1>Superglobal REQUEST</h1>";
        var_dump($_REQUEST);

        echo "---------------";

        echo "<h1>Superglobal ENV</h1>";
        var_dump($_ENV);

        echo "----------------";

        echo "<h1>Superglobal SERVER</h1>";
        var_dump($_SERVER);

        echo "----------------";

        echo "<h1>Superglobal GLOBALS</h1>";
        var_dump($GLOBALS);

        echo "----------------";
        
        // extra

        foreach (getenv() as $c => $v) {
            echo "<br> $c -> $v";
        }
        ?>
    </pre>  
</body>
</html>