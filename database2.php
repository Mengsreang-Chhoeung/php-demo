<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database 2</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "demo";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		} 

		$user_id = 0;
		$user_name = "";
		$user_sex = "";
		$user_position = "";

		if (isset($_GET['detail'])) {
			$userId = $_GET['detail'];

			$query = "SELECT * FROM users WHERE user_id = $userId LIMIT 1";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);

				$user_id = $row['user_id'];
				$user_name = $row['username'];
				$user_sex = $row['sex'];
				$user_position = $row['position'];
			}
		}

	?>

	<div class="container my-5">
		<a class="btn btn-primary mb-3" href="database.php">Back</a>
		<div class="card" style="width: 18rem;">
		  <div class="card-header">
		    Detail of User
		  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item">ID: <?php echo $user_id; ?></li>
		    <li class="list-group-item">Username: <?php echo $user_name; ?></li>
		    <li class="list-group-item">Sex: <?php echo $user_sex; ?></li>
		    <li class="list-group-item">Position: <?php echo $user_position; ?></li>
		  </ul>
		</div>
	</div>

</body>
</html>