<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Interface</title>
</head>
<body>
	<?php

		interface IFruit {
			function intro($name);
		}

		class Apple implements IFruit {
			function intro($name) {
				return "Hello {$name}";
			}
		}

		class Orange implements IFruit {
			function intro($name = "Orange") {
				return "Hello {$name}";
			}
		}

		$apple = new Apple();
		echo $apple->intro("Apple");


		$orange = new Orange();
		echo $orange->intro();
	?>
</body>
</html>