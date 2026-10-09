<?php
    if (isset($_POST["envia"])) {
        $directorio = $_POST["directorio"];
        $contenidoHtml = "<h1>Contenido del directorio $directorio</h1>";
        if (is_dir($directorio)) {
            $archivos = scandir($directorio);
            $contenidoHtml .= "<ul>";
                foreach ($archivos as $archivo) {
                    if($archivo != "."&& $archivo != "..") {
                        $contenidoHtml .= "<li>$archivo</li>";
                    }
                }
            echo "</ul>";
        } else {
            echo "<p>El directorio no existe</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="directorio">
        <input type="submit" name="envia">ENVIAR</input>
    </form>
    
<?php
    if (isset($contenidoHtml)){
        echo $contenidoHtml;
    }
?>

</body>
</html>