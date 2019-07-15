<!DOCTYPE html>
<html>
<head>
	<title>For, While and Do-While</title>
</head>
<body>
	<div>
		<p>
			Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
			La estructura for permite incrementar una variable de 2 en 2:

			for($f=2;$f<=20;$f=$f+2)
		</p>
	</div>
	<div>
		<h1>Solución:</h1>
	</div>

	<?php
		echo "Usando ciclo For:" . "<br>";
		$count = 0;
		for ($i=1; $i <=10 ; $i++) { 
			$result = 2*$i;
			echo "2 x $i  = $result" . "<br>";
		}

		echo "<br>";

		echo "Usando ciclo While: " . "<br>";
		$number = 1;
		while ($number <= 10) {
			$result = 2*$number;
			echo "2 x $number = $result" . "<br>";
			$number++;
		}

		echo "<br>";

		echo "Usando ciclo Do-While: " . "<br>";

		$numero = 1;
		do{
			$resultado = 2*$numero;
			echo "2 x $numero = $resultado" . "<br>";
			$numero++;

		}while($numero <=10);
	?>
</body>
</html>