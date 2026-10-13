<?php
    if (isset($_POST["enviar"])){
        $fichero = fopen("./pedido.txt", "w");
        fwrite($fichero, "PEDIDO DE PIZZAS\n");
        fwrite($fichero,"Nombre: {$_POST["nombre"]}\n");
        fwrite($fichero,"Direccion: {$_POST["direcc"]}\n");

        if (isset($_POST["jamon"])){
            fwrite($fichero,"Jamon: {$_POST["cant_jamon"]}\n");
        }

        if (isset($_POST["napolitana"])){
            fwrite($fichero,"Napolitana: {$_POST["cant_napolitana"]}\n");
        }

        if (isset($_POST["mozzarella"])){
            fwrite($fichero,"Mozzarella: {$_POST["cant_mozzarella"]}");
        } 

        fclose($fichero);
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
        <fieldset>
            <legend>Datos del envio</legend>

            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="direcc">Direccion: </label>
            <input type="text" name="direcc" id="direcc" required>
        </fieldset>
        <fieldset>
            <legend>Datos del pedido</legend>

            <label for="jamon">Jamon </label>
            <input type="checkbox" name="jamon" id="jamon">
            <label for="cant_jamon">Cantidad </label>
            <input type="number" name="cant_jamon" id="cant_jamon"  min="0"><br><br>

            <label for="napolitana">Napolitana </label>
            <input type="checkbox" name="napolitana" id="napolitana">
            <label for="cant_napolitana">Cantidad </label>
            <input type="number" name="cant_napolitana" id="cant_napolitana"  min="0"><br><br>

            <label for="mozzarella">Mozzarella</label>
            <input type="checkbox" name="mozzarella" id="mozzarella">
            <label for="cant_mozzarella">Cantidad </label>
            <input type="number" name="cant_mozzarella" id="cant_mozzarella"  min="0">
        </fieldset><br>
        <button type="submit" name="enviar" id="enviar">ENVIAR</button>
    </form>
</body>
</html>