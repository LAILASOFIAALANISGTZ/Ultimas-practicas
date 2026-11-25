<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de alumnos</title>
</head>
<body>
<h2>Registro de alumnos</h2>
<form method="POST">

    nombre del alumno:
    <input type="text" name="nombre">
    <br><br>
    Edad:
    <input type="text" name="edad">
    <br><br>
    Pasatirmpos:
    <input type="text" name="pasatiempos">
    <br><br>
    <button type="submit" name="guardar">Guardar</button>
</form>

<?php
    if (isset($_POST["guardar"])) {
        $nombre=$_POST["nombre"];
        file_put_contents("nombre,edad,pasat.txt", $nombre.PHP_EOL, FILE_APPEND);
       }
?>
    
<?php
    if (isset($_POST["guardar"])) {
        $edad=$_POST["edad"];
        file_put_contents("nombre,edad,pasat.txt", $edad.PHP_EOL, FILE_APPEND);
        }
?>

<?php
    if (isset($_POST["guardar"])) {
        $pas=$_POST["pasatiempos"];
        file_put_contents("nombre,edad,pasat.txt", $pas.PHP_EOL, FILE_APPEND);
        echo "<p>Datos guardados correctamente.</p>";
        }
?>
<h3>Datos registrados</h3>

<?php
   if (file_exists("nombre,edad,pasat.txt")) {
    $contenido=file_get_contents("nombre,edad,pasat.txt");
    echo nL2br($contenido);}
    else
        {echo "No existen registros.";}
   
?>

<?php
$archivo="nombre,edad,pasat.txt";
if (isset($_GET['id'])) {

$lineas=file($archivo,
FILE_IGNORE_NEW_LINES);

$nuevas_lineas=[];
foreach($lineas as $lineas) {
    $datos=explode("|",$linea);

    if ($datos[0]!=$id_eliminar) {
        $nuevas_lineas[]=$lineas;
    }
}

file_put_contents($archivo,implode("\n",
$nuevas_lineas));

header("Location:
    Ej65_Archivostxt.php");
exit();
}
?>                                                                  
                                                              

     <a href="?borrar=todo">
        <button>Borrar todos los datos</button>
    </a>

</body>
</html>