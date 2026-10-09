<!DOCTYPE html>
<html>
<body>

<?php
	for ($i = 0; $i <= 10; $i++) {
    	for ($j = 0; $j <= 10; $j++) {
        	$tabla[$i][$j] = $i*$j; 
        }
    }

    foreach($tabla as $clave1 => $valor1){
        echo "<h2>Tabla del $clave1</h2>";
        echo "<table border='2'>";
        foreach($valor1 as $clave2 => $valor2){
            echo "<tr><td>$clave1 x $clave2 = $valor2</td></tr>";
        }
        echo "</table>";
    }
?>

</body>
</html>
