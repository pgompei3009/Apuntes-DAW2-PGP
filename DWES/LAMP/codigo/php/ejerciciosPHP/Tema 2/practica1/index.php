<?php
if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $rutaTemporal = $_FILES['archivo']['tmp_name'];
    $rutaDestino = './subidas/' . $nombreArchivo;
    $tipoArchivo = $_FILES['archivo']['type'];
    $pesoArchivo = $_FILES['archivo']['size'];
    if ($tipoArchivo === 'image/jpeg' || $tipoArchivo === 'image/png' || $tipoArchivo === 'image/gif' || $tipoArchivo === 'application/pdf'){
        if ($pesoArchivo <= 2e+6) {
            if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
                echo 'El archivo se ha subido correctamente';
                echo '<br>';
                echo 'El archivo ' . $nombreArchivo . ' de tipo ' . $tipoArchivo . ' pesa ' . $pesoArchivo / 1e+3 . ' KiloBytes';
            } else {
                echo 'El archivo no se ha podido subir';
            }
        } else {
            echo 'El archivo no puede pesar mas de 2MB';
        }
    } else {
        echo 'El archivo debe ser JPEG, PNG, GIF o PDF';
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
        <label for="archivo">Seleccionar archivo: </label>
        <input type="hidden" name="pedro" value="gomez_peinado">
        <input type="file" name="archivo" id="archivo"><br>
        <input type="submit" name="enviar" id="enviar" value="ENVIAR">
    </form>
</body>
</html>