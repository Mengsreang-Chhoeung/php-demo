<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Looping Array</title>
</head>
<body>
	<?php 

		$list = [100, 200, 300, "Hello", "Bye"];

		// for ($i=0; $i < count($list) ; $i++) { 
		// 	echo $list[$i] . "<br>";
		// }


		$user = [
			"id"        =>    "USR00001",
			"name"      =>    "Kok",
			"sex"       =>    "Male",
			"isMarried" =>     true,
		];


		foreach ($user as $key => $value) {
			echo ucfirst($key) . " : " . $value . "<br>";
		}


		// foreach ($list as $arr) {
		// 	echo $arr . "<br>";
		// }

	?>
</body>
</html>