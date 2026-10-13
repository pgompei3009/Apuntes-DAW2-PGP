<?php
    require_once("./externo.php");
    if (isset($_POST["enviar"])){
        $arraNums = [$_POST["a"], $_POST["b"], $_POST["c"], $_POST["d"], $_POST["e"]];
        $arrayAsociativo = array_asociativo($arraNums);
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
        <table border="2px">
            <thead>
                <th>Numero 1</th>
                <th>Numero 2</th>
                <th>Numero 3</th>
                <th>Numero 4</th>
                <th>Numero 5</th>
            </thead>
            <tr>
                <td><input type="number" name="a" id="a"></td>
                <td><input type="number" name="b" id="b"></td>
                <td><input type="number" name="c" id="c"></td>
                <td><input type="number" name="d" id="d"></td>
                <td><input type="number" name="e" id="e"></td>
            </tr>
        </table><br>
        <button type="submit" name="enviar" id="enviar">ENVIAR</button>
    </form><br>
        <?php if (isset($arrayAsociativo)): ?>
            <table border="2px">
            <thead>
                <th>Numero mayor</th>
                <th>Numero menor</th>
                <th>Media</th>
            <thead>
            <tr>
                <?php
                    foreach ($arrayAsociativo as $clave => $valor){
                        echo "<td>{$valor}</td>";
                    }
                    echo "</tr>";
                ?>
            </table>
        <?php endif ?>
</body>
</html>