<?php
if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $rutaTemporal = $_FILES['archivo']['tmp_name'];
    $rutaDestino = './archivosSubidos/' . $nombreArchivo;
    $tipoArchivo = $_FILES['archivo']['type'];
    echo $tipoArchivo;
    if ($tipoArchivo == 'image/jpeg' || $tipoArchivo == 'image/png'){
        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
            echo 'El archivo se ha subido correctamente';
        } else {
            echo 'El archivo no se ha podido subir';
        }
    } else {
        echo 'El archivo debe ser JPEG o PNG'; 
    }
} else {
    echo 'Ha ocurrido un error';
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SERVER"]);?>" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="archivo">
        <button type="submit">ENVIAR</button>
    </form>
    <?php
    $archivos = scandir('./archivosSubidos/');
    foreach ($archivos as $a) {
        echo '<ul>';
        if ($a != '.' && $a != '..') {
            echo "<li><a href='./archivosSubidos/$a'>$a</a> &nbsp";
            echo "<a style='color: red' href='?borrar=./$a'>BORRAR</a></li>";
        }
        echo '</ul>';
    }
    if (isset($borrar)) {
        unlink($borrar);
    }
    ?>
</body>
</html>