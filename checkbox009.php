<!DOCTYPE html>
<html>
<head>
	<title>Radios</title>
</head>
<body>
	<div>
		<p>
			Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar una serie de deportes que practica (futbol, basket, tennis, voley)
			Mostrar en la página que procesa el formulario la cantidad de deportes que practica.
		</p>
	</div>
	<div>
		<h1>Solución:</h1>
	</div>

	<form method="post" action="">
		<input type="text" name="name"><br><br>
		<input type="checkbox" name="football" value="football">Fútbol<br><br>
		<input type="checkbox" name="basket" value="basket">Basketball<br><br>
		<input type="checkbox" name="tennis" value="tennis">Tennis<br><br>
		<input type="checkbox" name="volleyball" value="volleyball">Volleyball<br><br>
		<button type="submit" value="Enviar">Enviar</button>
	</form>

	<?php
		$value = array($football = $_REQUEST["football"]  ?? '', 
						$basket = $_REQUEST["basket"]  ?? '', 
						$tennis = $_REQUEST["tennis"]  ?? '', 
						$volley = $_REQUEST["volleyball"]  ?? ''
				);
		//echo $value[0];
		//$checkbox = $_REQUEST["football"]  ?? '';
		for ($i=0; $i <=3 ; $i++) { 
			if ($value[$i]) {
				echo "Practicas $value[$i]" . "<br>";
			}
		}
		

	?>
</body>
</html>