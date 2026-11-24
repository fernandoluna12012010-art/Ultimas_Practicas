<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO EE ALUMNOS</title>
</head>
<body>
	<h2>Registro de alumnos de 3°A Programacion</h2>
<form method="POST">
	Nombre del alumno:
	<input type="text" name="Nombre">
	<br><br>
	Edad
	<input type="number" name="Edad">
	<br><br>
	Pasatiempos
	<input type="text" name="Pasatiempos">
	<br><br>
	<button type="Submit" name="Guardar">GUARDAR</button>
</form>

<?php
if (isset($_POST['Guardar'])){
	$Nombre=$_POST['Nombre'];
	file_put_contents("Nombre.txt", $Nombre.PHP_EOL,FILE_APPEND);

}
?>
<h3>Lista de alumnos de 3°A registrados</h3>
<?php
if (file_exists("Nombre.txt")){
	$contenido=file_get_contents("Nombre.txt");
echo nl2br($contenido);
}

?>
<?php
if (isset($_POST['Guardar'])){
	$Edad=$_POST['Edad'];
	file_put_contents("Edad.txt", $Edad.PHP_EOL,FILE_APPEND);
	echo"<p>Nombre guardado correctamente.</p>";
}

?>
<h3>Lista de edad</h3>
<?php
if (file_exists("Edad.txt")){
	$contenido=file_get_contents("Edad.txt");
echo nl2br($contenido);
}

?>
<?php
if (isset($_POST['Guardar'])){
	$Pasatiempos=$_POST['Pasatiempos'];
	file_put_contents("Pasatiempos.txt", $Pasatiempos.PHP_EOL,FILE_APPEND);
	echo"<p>Edad guardado correctamente.</p>";
}

?>
<h3>Lista de Pasatiempos</h3>
<?php
if (file_exists("Pasatiempos.txt")){
	$contenido=file_get_contents("Pasatiempos.txt");
echo nl2br($contenido);
}

?>
<?php
if (isset($_POST['Guardar'])){
	$Pasatiempos=$_POST['Pasatiempos'];
	file_put_contents("Pasatiempos.txt", $Pasatiempos.PHP_EOL,FILE_APPEND);
	echo"<p>Pasatiempos guardados correctamente.</p>";
}

?>

</body>
</html>