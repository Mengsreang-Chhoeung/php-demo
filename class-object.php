<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Class and Object</title>
</head>
<body>
	<?php

		class Fruit {
			// Properties
			public $name;
			public $color;

			// Methods
			function getName() {
				return $this->name;
			}

			function setName($name) {
				$this->name = $name;
			}
		}

		$apple = new Fruit();
		$apple->setName("Apple");
		echo $apple->getName();

	?>
</body>
</html>