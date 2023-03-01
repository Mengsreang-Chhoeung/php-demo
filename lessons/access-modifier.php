<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Access Modifier</title>
</head>
<body>
	<?php

		class Fruit {
			// Properties
			private $name = "Apple";
			protected $color = "Red";
			const weight = "10 KG";

			function __construct() {
				// echo $this->name . " " . $this->color . " " . self::weight;
				$this->getHello();
			}

			// Methods
			function getWeight() {
				return self::weight;
			}

			function __toString() {
				return $this->name . " " . $this->color . " " . self::weight;
			}

			function setName($name) {
				$this->name = $name;
			}

			function getName() {
				return $this->name;
			}

			private function getHello() {
				echo "Hello";
			}

		}

		$apple = new Fruit();
		// echo $apple;
		// echo $apple->getWeight();
		$apple->setName("Orange");
		echo $apple->getName();

	?>
</body>
</html>