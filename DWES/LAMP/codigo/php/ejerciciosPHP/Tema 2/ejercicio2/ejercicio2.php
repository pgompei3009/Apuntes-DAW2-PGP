<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($_SERVER as $clave => $valor){
            echo "<h2>La variable server $clave</h2>";
            echo "<pre>";
                var_dump($valor);
            echo "</pre>";
        }

        echo("<br>");

        foreach($_SESSION as $clave => $valor){
            echo "<h2>La variable sesion $clave</h2>";
            echo "<pre>";
                var_dump($valor);
            echo "</pre>";
        }

    ?>
</body>
</html>