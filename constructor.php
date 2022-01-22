<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Constructor</title>
</head>
<body>
	<?php

		class Fruit {
			// Properties
			public $name;
			public $color;

			// Constructor
			function __construct() {
				$this->name = "Apple";
				$this->color = "Red";
			}

			// function __construct($name = "Apple", $color = "Red") {
			// 	$this->name = $name;
			// 	$this->color = $color;
			// }

			// Methods
			function getName() {
				return $this->name;
			}

			function setName($name) {
				$this->name = $name;
			}

			function getColor() {
				return $this->color;
			}

			function setColor($color) {
				$this->color = $color;
			}

			function __toString() {
				return "$this->name $this->color";
			}
		}

		// $apple = new Fruit("Banana", "Green");
		$apple = new Fruit();
		// echo $apple->getName();
		// echo $apple->getColor();
		echo $apple;

	?>
</body>
</html>