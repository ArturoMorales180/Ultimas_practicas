<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF=8">
	<title>Registro de alumnos</title>
</head>
<body>
	<h2>Registro de alumnos de 3°A Programacion</h2>
	<form method="POST">
		Nombre del alumno:
		<input type="text" name="nombre">
		<br><br>
		Edad del alumno:
		<input type="number" name="edad">
		<br><br>
		Pasatiempos del alumno:
		<input type="text" name="Pasatiempos">
		<br><br>
		<button type="submit" name="guardar">Guardar</button>
		<button type="submit" name="eliminar">Eliminar</button>
		<button type="submit" name="EN">Eliminar nombres</button>
		<button type="submit" name="EE">Eliminar edades</button>
		<button type="submit" name="EP">Eliminar pasatiempos</button>
</form>
<?php
if(isset($_POST['eliminar'])){
$archivo="alumn.txt";
if(file_exists($archivo)){
	unlink($archivo);
	echo"Archivo eliminado";
}
else{
	echo"El archivo no existe";
}

$archiv="Edades.txt";
if(file_exists($archiv)){
	unlink($archiv);
	echo"Archivo eliminado";
}
else{
	echo"El archivo no existe";
}

$archi="Pasatiempos.txt";
if(file_exists($archi)){
	unlink($archi);
	echo"Archivo eliminado";
}
else{
	echo"El archivo no existe";
}
}
if(isset($_POST['EN'])){
$archivo="alumn.txt";
if(file_exists($archivo)){
	unlink($archivo);
	echo"Archivo eliminado";
}
else{
	echo"El archivo no existe";
}
}
if(isset($_POST['EE'])){
$archivo="Edades.txt";
if(file_exists($archivo)){
	unlink($archivo);
	echo"Archivo eliminado";
}
else{
	echo"El archivo no existe";
}
}
if(isset($_POST['EP'])){
$archivo="Pasatiempos.txt";
if(file_exists($archivo)){
	unlink($archivo);
	echo"Archivo eliminado";
}
else{
	echo"El archivo no existe";
}
}
if(isset($_POST['guardar'])){
	$nombre=$_POST['nombre'];
	file_put_contents("alumn.txt", $nombre.PHP_EOL, FILE_APPEND);
	echo"<p>Nombre guardado correctamente. </p>";
	$edad=$_POST['edad'];
	file_put_contents("Edades.txt", $edad.PHP_EOL, FILE_APPEND);
	echo"<p>Edad guardada correctamente. </p>";
	$Pasatiempos=$_POST['Pasatiempos'];
	file_put_contents("Pasatiempos.txt", $Pasatiempos.PHP_EOL, FILE_APPEND);
	echo"<p>Pasatiempos guardados correctamente. </p>";
}
?>
<h3>Lista de alumnos de 3°A registrados</h3>

<?php
if(file_exists("alumn.txt")){
	$content=file_get_contents("alumn.txt");
	echo "nombre: ","<br>";
	echo nl2br($content);
}
if(file_exists("Edades.txt")){
	$cont=file_get_contents("Edades.txt");
	echo "Edad: ","<br>";
	echo nl2br($cont);
}
if(file_exists("Pasatiempos.txt")){
	$con=file_get_contents("Pasatiempos.txt");
	echo "Pasatiempos: ","<br>";
	echo nl2br($con);
}
?>
</body>
</html>