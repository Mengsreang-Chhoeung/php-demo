<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Data</title>
</head>
<body>
	
	<?php

		if (isset($_POST["submit_form"])) {
			$nameInput = $_POST['name'];
			echo $nameInput;
		} 

	?>

	<form action="form-data.php" method="POST">
		<input type="text" name="name" placeholder="Input name">
		<input type="submit" name="submit_form">
	</form>

	<?php

		if (isset($_GET['hello'])) {
			$hello = $_GET['hello'];

			echo $hello;
		} 

	?>

</body>
</html>