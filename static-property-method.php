<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Static Method</title>
</head>
<body>
	<?php

		class Person {
			private static $firstname;
			private static $lastname;

			static function getFirstname() {
				return self::$firstname;
			}

			static function getLastname() {
				return self::$lastname;
			}

			static function setFirstname($firstname) {
				self::$firstname = $firstname;
			}

			static function setLastname($lastname) {
				self::$lastname = $lastname;
			}
		}

		class User extends Person {
			static function getFullName() {
				return parent::getFirstname() . " " . parent::getLastname();
			}
		}


		User::setFirstname("Kok");
		User::setLastname("Dara");
		echo User::getFullName();

	?>
</body>
</html>