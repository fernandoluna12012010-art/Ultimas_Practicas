<!DOCTYPE html>
<html lang="es">
<head>
	<title> Guardar Informacion</title>
</head>
<body>
	<h2>Guardar informacion en un archivo</h2>


<?php

$Nombre="Luis Soto";
file_put_contents("alumnos.txt",$Nombre. PHP_EOL, FILE_APPEND);
echo "Informacion guardada correctamente.";
echo "<BR><BR>";

?>
<?php

$Nombre="Laila Cossio";
file_put_contents("alumnos.txt",$Nombre. PHP_EOL, FILE_APPEND);//File_put_contents es para abrir el archivo. PHP_EOL,FILE_APPEND es para los saltos de linea.
echo "Alumno guardado correctamente";
echo "<BR><BR>";

?>
<?php
$contenido=file_get_contents("Alumnos.txt");
//echo $contenido;
echo(nl2br($contenido));

//echo nl2br($contenido)
?>
</body>
</html>