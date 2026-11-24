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

	<button type="Submit" name="Guardar">GUARDAR</button>
</form>

<?php
if (isset($_POST['Guardar'])){
	$Nombre=$_POST['Nombre'];
	file_put_contents("ProgramacionA.txt", $Nombre.PHP_EOL,FILE_APPEND);
	echo"<p>Nombre guardado correctamente.</p>";
}
?>
<h3>Lista de alumnos de 3°A registrados</h3>
<?php
if (file_exists("PromgramacionA.txt")){
	$contenido=file_get_contents("ProgramacionA.txt");
echo nl2br($contenido);
}

?>





</body>
</html>