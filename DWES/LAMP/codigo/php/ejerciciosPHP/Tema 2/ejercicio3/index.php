<?php
    require_once "./externo.php";
    if(isset($_POST["enviar"])){
        $a = $_POST["a"];
        $b = $_POST["b"];
        if ($b == ""){
            $b = 0;
        }
        $resultado = potencia($a, $b);            
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
        <label for="a">Primer numero</label><br>
        <input type="number" name="a" id="a" required><br>
        <label for="b">Segundo numero</label><br>
        <input type="number" name="b" id="b"><br>
        <button type="submit" name="enviar">ENVIAR NUMEROS</button>
    </form><br>
    <table border="2">
        <thead>
            <th>datos</th>
            <th>resultado</th>
        </thead>
        <tr>
            <td>
                <?php if(isset($a) && isset($b)){
                    echo "$a a la potencia de $b";
                }?>
            </td>
            <td>
                <?php if(isset($resultado)){
                    echo "$resultado";
                }?>
            </td>
        </tr>
    </table>
</body>
</html>