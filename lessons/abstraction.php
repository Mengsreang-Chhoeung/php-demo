<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Abstraction</title>
</head>
<body>
	<?php

		abstract class Fruit {
			// Properties
			public $name;

			// Constructor
			function __construct($name) {
				$this->name = $name;
			}

			// Methods
			abstract protected function intro();
		}


		class Apple extends Fruit {
			function intro() {
				return "Hello {$this->name}";
			}
		}

		class Orange extends Fruit {
			function intro() {
				return "Hello {$this->name}";
			}
		}

		$apple = new Apple("Apple");
		echo $apple->intro();

		$orange = new Orange("Orange");
		echo $orange->intro();
	?>
</body>
</html>