<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Associative Arrray</title>
</head>
<body>
	<?php 

		// $user = array(
		// 	"id"        =>    "USR00001",
		// 	"name"      =>    "Kok",
		// 	"sex"       =>    "Male",
		// 	"isMarried" =>     true,
		// );

		$user = [
			"id"        =>    "USR00001",
			"name"      =>    "Kok",
			"sex"       =>    "Male",
			"isMarried" =>     true,
		];

		echo $user["id"] . "<br>";

		$user["id"] = "USR00002";

		echo $user["id"] . "<br>";

		$user["position"] = "Developer";

		echo $user["position"] . "<br>";

		echo "Count of User: " . count($user) . "<br>";

		echo "Last index of User: " . end($user) . "<br>";

	?>
</body>
</html>