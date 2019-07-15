<!DOCTYPE html>
<html>
<head>
	<title>Estructura IF</title>
</head>
<body>
	<div>
		<p>
			Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string "tres").

			Para ver si una variable es igual a cierto valor debemos plantear una condición similar a:

			if ($valor==3)
			{
			  //algoritmo
			}
		</p>
	</div>
	<div>
		<h1>Solución:</h1>
	</div>

	<?php
		$randomNumber = rand(1,3);

		echo "El valor random es: $randomNumber" . "<br>";

		if ($randomNumber == 1) {
			echo "El valor es uno";
		} else if ($randomNumber == 2) {
			echo "El valor es dos";
		} else {
			echo "El valor es tres";
		}
	?>	
</body>
</html>