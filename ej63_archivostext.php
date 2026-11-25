<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF=8">
	<title>Guardar informacion</title>
</head>
<body>
	<h2>Guardar informacion en un archivo</h2>

<?php
$nombre="Mexican Lopez";
file_put_contents("alumnos.txt", $nombre.PHP_EOL,FILE_APPEND);
echo"Informacion guardada correctamente. ";
echo"<br><br>";

?>

<?php
$nombre="Monstruo Lopez";
file_put_contents("alumnos.txt", $nombre.PHP_EOL,FILE_APPEND);
echo"<br><br>";

?>

<?php
$content= file_get_contents("alumnos.txt");
//echo $content;
echo nl2br($content);
?>
</body>
</html>
