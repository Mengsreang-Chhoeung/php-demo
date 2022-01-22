<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exception Handler</title>
</head>
<body>
	<?php

		function limitOne($number) {
			if ($number >= 1) {
				throw new Exception("The number cannot be bigger than or equal to one");			
			}
		}

		try {
			limitOne(0);

			$hello = "123H";

			echo floatval($hello);

			echo "Hello World" . "<br>";
		} catch(Exception $ex) {
			echo "Error" . $ex . "<br>";
		} finally {
			echo "<span style='color: red;'>Finished</span>" . "<br>";
		}


	?>
</body>
</html>