<!DOCTYPE html>
<html>
<head>
	<title>OOP 2nd</title>
</head>
<body>
	<div>
		<p>
			Confeccionar una clase Menu. Permitir añadir la cantidad de opciones que necesitemos. Mostrar el menú en forma horizontal o vertical (según que método llamemos.
		</p>
	</div>
	<div>
		<h1>Solución:</h1>
	</div>

	<?php
		class Menu {
			private $links;
			private $titles;

			public function uploadOption($ln, $ti){
				$this->links = $ln;
				$this->titles = $ti;
			}

			public function vertical() {
				for ($i=0; $i < count($this->links); $i++) { 
					echo '<a href="'.$this->links[$i] . '">'.$this->titles[$i] . "</a>";
					echo "/";
				}
			}

			public function horizontal() {
				for ($i=0; $i <count($this->links) ; $i++) { 
					echo '<a href="'.$this->links[$i].'">'.$this->titles[$i].'</a>';
					echo "<br>";
				}
			}

		}

		$menu1 = new Menu();
		$menu1->uploadOption("www.google.cl", "Google Chile");
		$menu1->vertical();

	?>
</body>
</html>