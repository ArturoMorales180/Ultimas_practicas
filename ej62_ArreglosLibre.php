<HTDOCS html>
<html>
<title>EJERCICIO LIBRE</title>
<body>
<form method="POST">
	<h2>EJERCICO LIBRE DE HTML</h2>
	<label>Introduce un valor:</label>
	<input type="number" name="n" id="num" required>
	<br><br>
	<label>Introduce un segundo valor:</label>
	<input type="numer" name="N" id="N" required>
	<br><br>
	<button type="submit" name="calcular" id="calcular">
		Calcular operaciones
	</button>
</form>
<?php
if(isset($_POST['calcular'])){
	$n=json_decode($_POST['n'],true);
	$N=json_decode($_POST['N'],true);


	$s=$n+$N;
	$r=$n-$N;
	$m=$n*$N;
	$d=$n/$N;
	echo"<h3>SUMA DE HAMBOS VALORES</h3>";
	echo $s,"<br>","<br>";

	echo"<h3>RESTA DE HAMBOS VALORES</h3>";
	echo $r,"<br>","<br>";

	echo"<h3>MULTIPLICACION DE HAMBOS VALORES</h3>";
	echo $m,"<br>","<br>";

	echo"<h3>DIVICION DE HAMBOS VALORES</h3>";
	echo $d,"<br>","<br>";
}
?>