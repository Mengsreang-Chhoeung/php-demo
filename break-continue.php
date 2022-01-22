<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Break and Continue</title>
</head>
<body>
	<?php
		for ($i=1; $i <= 5 ; $i++) { 
			if ($i == 3) continue;
			echo "Hello $i <br>";
		}
	?>
</body>
</html>