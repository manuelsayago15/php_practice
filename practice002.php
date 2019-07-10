<!DOCTYPE html>
<html lang="en">
<head>
	<title>Practice 2</title>
</head>
<body>
	<div>
		<p>
			Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:

			$num=rand(1,100);
			En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.

			Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor.

			Para imprimir el contenido de una variable también utilizamos el comando echo:

			echo $num;
		</p>
	</div>
	<div>
		<h1>Solución:</h1>
	</div>
	<?php
		$num = rand(1,100);
		echo "El valor de num es $num" . "<br>"; 
		if ($num == 50) {
			echo "El valor de la función rand es igual a $num";
		} else if ($num < 50) {
			echo "El valor de la función rand es menor a 50";
		} else {
			echo "El valor de la función rand es mayor a 50"; 
		}
	?>
</body>
</html>