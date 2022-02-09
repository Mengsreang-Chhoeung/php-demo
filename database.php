<?php ob_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database</title>
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
		$isEdited = false;


		if (isset($_GET['limit'])) {
			$lim = $_GET['limit'];
		} else {
			$lim = "";
		}

		if ($lim == 0 || empty($lim)) {
			$limit = 5;
		} else {
			$limit = $lim;
		}

		if (isset($_GET['page'])) {
			$pag = $_GET['page'];
		} else {
			$pag = "";
		}

		if ($pag == 0 || empty($pag)) {
			$page = 0;
		} else {
			$page = $pag;
		}

		if ($page == 0) {
			$pagination = 1;
		} else {
			$pagination = $page;
		}

		$offset = ceil( $pagination * $limit ) - $limit;

	?>

	<div class="w-100 d-flex justify-content-center mt-5">
		<table class="table table-bordered w-50 table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Sex</th>
					<th>Position</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php

					$query = "SELECT * FROM users LIMIT $limit OFFSET $offset";
					$result = mysqli_query($conn, $query);
					$queryCount = "SELECT * FROM users";
					$resultCount = mysqli_query($conn, $queryCount);

					$count = mysqli_num_rows($resultCount);
					$countPage = ceil( $count / $limit );

					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							$userId = $row['user_id'];
							$username = $row['username'];
							$sex = $row['sex'];
							$position = $row['position'];

							?>


								<tr>
									<td><?php echo $userId; ?></td>
									<td><?php echo $username; ?></td>
									<td><?php echo $sex; ?></td>
									<td><?php echo $position; ?></td>
									<td class="d-flex align-items-center">
										<a class="btn btn-warning" href="database.php?edit=<?php echo $userId; ?>">Edit</a>
										<div style="width: 10px;"></div>
										<a class="btn btn-info" href="database2.php?detail=<?php echo $userId; ?>">Detail</a>
										<div style="width: 10px;"></div>
										<a class="btn btn-danger" href="database.php?delete=<?php echo $userId; ?>">Delete</a>
									</td>
								</tr>


							<?php
						}
					} else echo "0 data";
				?>

			</tbody>
		</table>
	</div>


	<nav class="w-100 d-flex justify-content-center">
	  <ul class="pagination">
	    <!-- <li class="page-item disabled">
	      <a class="page-link">Previous</a>
	    </li> -->



	    <?php

	    	for ($i = 1; $i <= $countPage ; $i++) { 
	    		?>

	    			<li class="page-item <?php echo $pagination == $i ? 'active' : ''; ?>"><a class="page-link" href="database.php?limit=<?php echo $limit; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

	    		<?php
	    	}

	    ?>




	    <!-- <li class="page-item active" aria-current="page">
	      <a class="page-link" href="#">2</a>
	    </li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li> -->
	    <!-- <li class="page-item">
	      <a class="page-link" href="#">Next</a>
	    </li> -->
	  </ul>
	</nav>



	<?php


		if (isset($_GET['delete'])) {
			$userId = $_GET['delete'];

			$query = "DELETE FROM users WHERE user_id = $userId";
			$result = mysqli_query($conn, $query);

			if (!$result) {
				echo "<script>alert('Erorr create user!')</script>";
			} else {
				echo "<script>alert('Create user successfully!')</script>";
				header('Location: database.php');
			}
		}


	?>


	<?php

		if (isset($_GET['edit'])) {
			$userId = $_GET['edit'];

			$query = "SELECT * FROM users WHERE user_id = $userId";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);

				$user_name = $row['username'];
				$user_sex = $row['sex'];
				$user_position = $row['position'];
				$user_id = $row['user_id'];
				$isEdited = true;
			}
		}

		if (isset($_POST['update_user'])) {
			$userId = $_POST['id'];
			$username = mysqli_real_escape_string($conn, $_POST['usename']);
			$sex = mysqli_real_escape_string($conn, $_POST['sex']);
			$position = mysqli_real_escape_string($conn, $_POST['position']);

			$query = "UPDATE users SET username = '$username', sex = '$sex', position = '$position' WHERE user_id = $userId";
			$result = mysqli_query($conn, $query);

			if (!$result) {
				echo "<script>alert('Erorr update user!')</script>";
			} else {
				header('Location: database.php');
			}
		}

	?>




	<?php

		if (isset($_POST['create_user'])) {
			$username = mysqli_real_escape_string($conn, $_POST['usename']);
			$sex = mysqli_real_escape_string($conn, $_POST['sex']);
			$position = mysqli_real_escape_string($conn, $_POST['position']);

			$query = "INSERT INTO users (username, sex, position) VALUES ('$username', '$sex', '$position')";
			$result = mysqli_query($conn, $query);

			if (!$result) {
				echo "<script>alert('Erorr create user!')</script>";
			} else {
				header('Location: database.php');
			}
		}
	?>






	<div class="w-100 d-flex justify-content-center my-5">
		<form action="database.php" method="POST" class="w-50">
			<input type="hidden" name="id" value="<?php echo $user_id; ?>">
			<div class="form-group mb-3">
				<label>Username:</label>
				<input type="text" name="usename" value="<?php echo $user_name; ?>" class="form-control">
			</div>
			<div class="form-group mb-3">
				<label>Sex:</label>
				<select class="form-select" name="sex">
				  <option value="<?php echo $user_sex; ?>"><?php echo $user_sex ?: "Select options"; ?></option>
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
				  <option value="Other">Other</option>
				</select>
			</div>
			<div class="form-group mb-3">
				<label>Position:</label>
				<input type="text" name="position" value="<?php echo $user_position; ?>" class="form-control">
			</div>
			<input type="submit" name="<?php echo $isEdited ? 'update_user' : 'create_user'; ?>" class="btn btn-<?php echo $isEdited ? 'warning' : 'primary'; ?>" value="<?php echo $isEdited ? 'Update User' : 'Create User'; ?>">
		</form>
	</div>

</body>
</html>