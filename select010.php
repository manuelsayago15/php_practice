<!DOCTYPE html>
<html>
<head>
	<title>Radios</title>
</head>
<body>
	<div>
		<p>
			Confeccionar un formulario que solicite el ingreso del nombre de una persona y un control select (en este último permitir la selección de los ingresos mensuales de la persona: 1-1000,1001-3000,>3000)
			En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si supera 3000)
		</p>
	</div>
	<div>
		<h1>Solución:</h1>
	</div>

	<form method="post" action="">
		Type your name:
		<input type="text" name="name"><br><br>
		<select name="ingresos">
			<option>Select</option>
			<option value="one">1-1000</option>
			<option value="two">1001-3000</option>
			<option value="three">>3000</option>
		</select>
		<input type="submit" name="Send">
	</form>

	<?php
		
		$name = $_REQUEST["name"]  ?? '';
		$income = $_REQUEST["ingresos"] ?? '';
		if ($income == "one") {
			echo "No paga impuestos";
		} else if ($income == "two") {
			echo "No paga impuestos";
		} else if ($income == "three") {
			echo "Debe pagar impuestos, supera los $3000";
		}
		
		

	?>
</body>
</html>