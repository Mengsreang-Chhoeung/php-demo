<?php
	session_start();
	$cookie_name = "user";
	$cookie_value = "Kok Dara";
	$cookie_expire = time() + (86400 * 30);
	$cookie_path = "/";
	setcookie($cookie_name, $cookie_value, $cookie_expire, $cookie_path);
	$_SESSION['user'] = "Him Kanha";
	$_SESSION['user2'] = "Kok Koko";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie and Session</title>
</head>
<body>
	<?php

		if (isset($_COOKIE[$cookie_name])) {
			echo "Cookie User: " . $_COOKIE[$cookie_name] . "<br>";
		} else {
			echo "Cookie User Empty!";
		}

		if (isset($_SESSION['user'])) {
			echo "Session User: " . $_SESSION['user'] . "<br>";
		} else {
			echo "Session User Empty!";
		}

		if (isset($_SESSION['user2'])) {
			echo "Session User2: " . $_SESSION['user2'] . "<br>";
		} else {
			echo "Session User2 Empty!";
		}


	?>
</body>
</html>