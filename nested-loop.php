<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nested Loop</title>
</head>
<body>
	<?php
		for ($i=0; $i < 5 ; $i++) { 
			for ($j=0; $j < $i ; $j++) { 
				echo "Bye $j <br>";
			}
			echo "Hello $i <br>";
		}
	?>
</body>
</html>