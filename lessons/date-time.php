<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Date and Time</title>
</head>
<body>	
	<?php

		date_default_timezone_set("America/New_York");
		echo date("h:i:s a") . "<br>";
		echo date("l, F d, Y");

	?>
</body>
</html>