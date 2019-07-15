<!DOCTYPE html>
<html>
<head>
	<title>Radios</title>
</head>
<body>
	<div>
		<p>
			Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de tipo radio que nos permitan seleccionar si la persona: 1-no tiene estudios, 2-estudios primarios y 3-estudios secundarios.
			En la página que procesa el formulario mostrar el nombre de la persona y un mensaje indicando el tipo de estudios que posee.
		</p>
	</div>
	<div>
		<h1>Solución:</h1>
	</div>

	<form method="post" action="">
		<input type="text" name="name"><br><br>
		<input type="radio" name="estudios" value="Sin estudios">Sin estudios<br><br>
		<input type="radio" name="estudios" value="Estudios primarios">Estudios primarios<br><br>
		<input type="radio" name="estudios" value="Estudios secundarios">Estudios secundarios<br><br>
		<button type="submit" value="Enviar">Enviar</button>
	</form>

	<?php
		$name = $_REQUEST["name"]  ?? '';
		$radio = $_REQUEST["estudios"]  ?? '';
		if ($radio == "Sin estudios") {
			echo "Su nombre es $name y su tipo de estudios es: $radio";
		} else if ($radio == "Estudios primarios") {
			echo "Su nombre es $name y su tipo de estudios es: $radio";
		} else {
			echo "Su nombre es $name y su tipo de estudios es: $radio";
		}

	?>
</body>
</html>