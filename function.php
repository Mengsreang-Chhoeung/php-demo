<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Function</title>
</head>
<body>
	<?php
		// declare function
		function hello($a, $b) {
			$c = $a + $b;
			$d = $a - $b;
			return $d;
		}
		// invoke function
		echo hello(10, 20);
	?>
</body>
</html>