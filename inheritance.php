<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inheritance</title>
</head>
<body>
	<?php
		// Base Class
		class Fruit {
			// Properties
			private $name = "Apple";
			protected $color = "Red";

			function __construct($name = "Apple", $color = "Red") {
				$this->name = $name;
				$this->color = $color;
			}

			// Methods
			function __toString() {
				return $this->name . " " . $this->color;
			}
		}


		// Derived Class
		class Apple extends Fruit {
			public $weight;

			function __construct($name = "Apple 111", $color = "Green", $weight = "1 KG") {
				$this->name = $name;
				$this->color = $color;
				$this->weight = $weight;
			}

			function __toString() {
				return $this->name . " " . $this->color . " " . $this->weight;
			}
		}

		$apple = new Apple();
		echo $apple;
	?>
</body>
</html>