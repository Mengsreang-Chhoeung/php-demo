<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trait</title>
</head>
<body>
	<?php

		trait MessageOne {
			function introOne() {
				echo "Hello Message One";
			}
		}

		trait MessageTwo {
			public $message = "Hello";

			function __construct() {
				echo "Hello World";
			}

			abstract function introTwo();
		}

		class Chat {
			use MessageOne, MessageTwo;

			function introOne() {
				echo "Hello Messenger";
			}

			function introTwo() {
				echo "Hello Boy";
			}
		}


		$messager = new Chat();
		echo "<br>";
		$messager->introOne();
		echo "<br>";
		$messager->introTwo();
		echo "<br>";
		echo $messager->message;

	?>
</body>
</html>