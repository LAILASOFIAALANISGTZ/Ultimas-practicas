<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej62 Arreglos Libre</title>
</head>
<body>
<h2>Calificaciones de mis Amigos</h2>

<?php

$alumnos = array("Ana", "Luis", "Sofia", "Diego");


$calif = array();
$calif[0][0] = 90; $calif[0][1] = 85; $calif[0][2] = 95; 
$calif[1][0] = 70; $calif[1][1] = 80; $calif[1][2] = 75; 
$calif[2][0] = 100; $calif[2][1] = 95; $calif[2][2] = 98; 
$calif[3][0] = 60; $calif[3][1] = 65; $calif[3][2] = 70; 

echo "<h3>Calificaciones</h3>";

for ($f = 0; $f < 4; $f++) {
    echo $alumnos[$f] . ": ";
    for ($c = 0; $c < 3; $c++) {
        echo $calif[$f][$c] . " ";
    }

    $promedio = ($calif[$f][0] + $calif[$f][1] + $calif[$f][2]) / 3;
    echo " - Promedio: " . $promedio . "<br>";
}
?>

</body>
</html>