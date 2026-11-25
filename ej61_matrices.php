<DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>suma de matrizes</title>
 </head>
 <body>

 	<h2>SUMA DE MATRICES</h2>

 	<form method="POST" action="">

 	<?php
 	$ma1=[[100,110,120],[130,140,150],[160,170,180]];
 	$ma2=[[500,520,540],[560,580,600],[620,640,680]];
 	$ma3=array();
 		
 		for($i=0;$i<3;$i++){
 			for($j=0;$j<3;$j++){
 				$ma3[$i][$j]=$ma1[$i][$j]+$ma2[$i][$j];
 			}

 		}

 		echo "<table border= ´1´ cellpadding='10' cellspacing='0'>";

 		echo"<h3>Matriz 1</h3>";
 		for($i=0;$i<3;$i++){
 			echo "<tr>";
 			for($j=0;$j<3;$j++){
 			echo"<td>".$ma1[$i][$j]."<br>". "</td>";
 			}
 			echo"</tr>";
 		}
 		echo "</table>";

 		echo "<table border= ´1´ cellpadding='10' cellspacing='0'>";

 		echo"<h3>Matriz 2</h3>";
 		for($i=0;$i<3;$i++){
 			echo "<tr>";
 			for($j=0;$j<3;$j++){
 			echo"<td>".$ma2[$i][$j]."<br>". "</td>";
 			}
 			echo"</tr>";
 		}
 		echo "</table>";

		echo "<table border= ´1´ cellpadding='10' cellspacing='0'>";

 		echo"<h3>Matriz 3</h3>";
 		for($i=0;$i<3;$i++){
 			echo "<tr>";
 			for($j=0;$j<3;$j++){
 			echo"<td>".$ma3[$i][$j]."<br>". "</td>";
 			}
 			echo"</tr>";
 		}
 		echo "</table>";
 ?>
</body>
</html>