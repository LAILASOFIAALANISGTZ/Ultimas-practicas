<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar informacion</title>
</head>
<body>
<h2>Guardar informacion en el archivo</h2>

<?php
    $nombre="Luis Soto";
    file_put_contents("alumnos.txt", $nombre.PHP_EOL,
        FILE_APPEND);
        echo "Informacion guardada correctamente.";
        echo "<br><br>";
?>

<?php
    $nombre="Laila Cossio";
    file_put_contents("alumnos.txt", $nombre.PHP_EOL,
        FILE_APPEND);
        echo "alumna agregada correctamente.";
        echo "<br><br>";
?>

<?php
   echo"<br><br>";
  $contenido=file_get_contents("alumnos.txt");
  //echo $contenido;
  echo nL2br($contenido);
?>

</body>
</html>