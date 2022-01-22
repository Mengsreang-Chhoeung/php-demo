<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variable Scope</title>
</head>
<body>
	<?php
		$hello = "Hello World";


		function helloCountry() {
			$hello = "Hello Country";

			echo $hello;
			echo $GLOBALS["hello"];
		}

		helloCountry();
	?>
</body>
</html>