<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<div>
		<p>
			Confeccionar un formulario que solicite la carga de un nombre de persona y su edad, luego mostrar en otra página si es mayor de edad (si la edad es mayor o igual a 18)
		</p>
	</div>
	<div>
		<h1>Solución:</h1>
	</div>

	<form method="post" action="">
		<input type="text" name="name">
		<input type="number" name="age">
		<button type="submit" value="Enviar">Enviar</button>
	</form>

	<?php
		$value = $_REQUEST['name'] ?? '';
		$value2 = $_REQUEST['age'] ?? '';
		echo "El nombre es: " . $value  . "<br>";
		echo "La edad es: " . $value2  . "<br>";
		if ($value2 >= 18) {
			echo "$value es mayor de edad";
		}
	?>
</body>
</html>