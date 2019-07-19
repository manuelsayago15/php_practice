<!DOCTYPE html>
<html>
<head>
	<title>OOP 1st coding</title>
</head>
<body>
	<div>
		<p>
			Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.
			Definir un método inicializar que lleguen como dato el nombre y sueldo. Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos)
		</p>
	</div>
	<div>
		<h1>Solución:</h1>
	</div>

	<?php
		class Empleado {
			private $name;
			private $salary;
			
			public function initialize($name, $salary) {
				$this->name = $name;
				$this->salary = $salary;
			}

			public function print() {
				if ($this->salary > 3000) {
					echo "Debe pagar impuestos";
				} else {
					echo "No debe pagar impuestos";
				}
			}
		}

		$employee = new Empleado();
		$employee->initialize("Manuel", 2900);
		$employee->print();

	?>
</body>
</html>