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

		$username_error = "";
		$user_sex_error = "";
		$user_position_error = "";


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

		if (isset($_GET['q'])) {
			$q = $_GET['q'];
		} else {
			$q = "";
		}

		if (isset($_GET['sortBy'])) {
			$sort = $_GET['sortBy'];
		} else {
			$sort = "";
		}

		if (empty($sort)) {
			$sortBy = "DESC";
		} else if ($sort === "Old") {
			$sortBy = "ASC";
		} else {
			$sortBy = "DESC";
		}

	?>

	<div class="w-100 d-flex justify-content-center mt-5">
		<form class="d-flex" id="search__box">
	        <input class="form-control me-2" type="search" value="<?php echo $q; ?>" placeholder="Search name" aria-label="Search" id="search__input">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	    </form>
	    <div style="width: 20px;"></div>
			<div class="d-flex align-items-center" style="width: 200px;">
			  	<span style="width: 45%; margin-right: 5%;">Sort by: </span>
			  	<select class="form-select" style="width: 50%;" id="sort__by">
			  		<option><?php echo $sort === "" ? "New" : $sort ?></option>
				  	<option>New</option>
				  	<option>Old</option>
				</select>
			</div>
		</div>
	</div>

	<div class="w-100 d-flex justify-content-center mt-3">
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

					$query = "SELECT * FROM users WHERE LOWER( username ) LIKE LOWER ( '%$q%' ) ORDER BY user_id $sortBy LIMIT $limit OFFSET $offset";
					$result = mysqli_query($conn, $query);
					$queryCount = "SELECT * FROM users WHERE LOWER( username ) LIKE LOWER ( '%$q%' )";
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
					}
				?>

			</tbody>
		</table>
	</div>


	<nav class="w-100 d-flex justify-content-center align-items-center">
	  <ul class="pagination m-0 p-0">
	    <li class="page-item <?php echo $pagination == 1 ? 'disabled' : ''; ?>">
	      <a class="page-link" href="database.php?limit=<?php echo $limit; ?>&page=<?php echo $pagination - 1; ?>">Previous</a>
	    </li>


	    <?php

	    	for ($i = 1; $i <= $countPage ; $i++) { 
	    		?>

	    			<li class="page-item <?php echo $pagination == $i ? 'active' : ''; ?>"><a class="page-link" href="database.php?limit=<?php echo $limit; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

	    		<?php
	    	}

	    ?>

	    <li class="page-item <?php echo $pagination >= $countPage ? 'disabled' : '' ?>">
	      <a class="page-link" href="database.php?limit=<?php echo $limit; ?>&page=<?php echo $pagination + 1; ?>">Next</a>
	    </li>
	  </ul>

	  <div style="width: 20px;"></div>

	  <div class="d-flex align-items-center" style="width: 200px;">
		<select class="form-select" style="width: 50%;" id="page__limit">
			<option><?php echo $limit; ?></option>
			<option>5</option>
			<option>15</option>
			<option>25</option>
			<option>100</option>
		</select>
		<span style="width: 45%; margin-left: 5%;"> / Page</span>
	  </div>
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

			$user_sex = $sex;
			$user_position = $position;

			if (empty($username)) $username_error = "Username is required!";
			if (empty($sex)) $user_sex_error = "Sex is required!";
			if (empty($position)) $user_position_error = "Position is required!";

			$existByUsernameQuery = "SELECT user_id FROM users WHERE BINARY username = '$username'";
			$existByUsernameQueryResult = mysqli_query($conn, $existByUsernameQuery);

			if (!empty($username) && !empty($sex) && !empty($position)) {
				if ($user_name !== $username) {
					if (mysqli_num_rows($existByUsernameQueryResult) > 0) {
						$user_name = $username;
						$username_error = "Username already exists!";
					} else {
						$query = "UPDATE users SET username = '$username', sex = '$sex', position = '$position' WHERE user_id = $userId";
						$result = mysqli_query($conn, $query);

						if (!$result) {
							echo "<script>alert('Erorr update user!')</script>";
						} else {
							header('Location: database.php');
						}
					}
				} else {
					$query = "UPDATE users SET username = '$username', sex = '$sex', position = '$position' WHERE user_id = $userId";
					$result = mysqli_query($conn, $query);

					if (!$result) {
						echo "<script>alert('Erorr update user!')</script>";
					} else {
						header('Location: database.php');
					}
				}
			}
		}

	?>




	<?php

		if (isset($_POST['create_user'])) {
			$username = mysqli_real_escape_string($conn, $_POST['usename']);
			$sex = mysqli_real_escape_string($conn, $_POST['sex']);
			$position = mysqli_real_escape_string($conn, $_POST['position']);

			$user_name = $username;
			$user_sex = $sex;
			$user_position = $position;

			if (empty($username)) $username_error = "Username is required!";
			if (empty($sex)) $user_sex_error = "Sex is required!";
			if (empty($position)) $user_position_error = "Position is required!";

			$existByUsernameQuery = "SELECT user_id FROM users WHERE BINARY username = '$username'";
			$existByUsernameQueryResult = mysqli_query($conn, $existByUsernameQuery);

			if (!empty($username) && !empty($sex) && !empty($position)) {
				if (mysqli_num_rows($existByUsernameQueryResult) > 0)
					$username_error = "Username already exists!";
				else {
					$query = "INSERT INTO users (username, sex, position) VALUES ('$username', '$sex', '$position')";
					$result = mysqli_query($conn, $query);

					if (!$result) {
						echo "<script>alert('Erorr create user!')</script>";
					} else {
						header('Location: database.php');
					}
				}
			}
		}
	?>



	<div class="w-100 d-flex justify-content-center my-5">
		<form method="POST" class="w-50">
			<input type="hidden" name="id" value="<?php echo $user_id; ?>">
			<div class="form-group mb-3">
				<label>Username:</label>
				<input type="text" name="usename" value="<?php echo $user_name; ?>" class="form-control">
				<small class="text-danger"><?php echo $username_error; ?></small>
			</div>
			<div class="form-group mb-3">
				<label>Sex:</label>
				<select class="form-select" name="sex">
				  <option value="<?php echo $user_sex; ?>"><?php echo $user_sex ?: "Select options"; ?></option>
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
				  <option value="Other">Other</option>
				</select>
				<small class="text-danger"><?php echo $user_sex_error; ?></small>
			</div>
			<div class="form-group mb-3">
				<label>Position:</label>
				<input type="text" name="position" value="<?php echo $user_position; ?>" class="form-control">
				<small class="text-danger"><?php echo $user_position_error; ?></small>
			</div>
			<input type="submit" name="<?php echo $isEdited ? 'update_user' : 'create_user'; ?>" class="btn btn-<?php echo $isEdited ? 'warning' : 'primary'; ?>" value="<?php echo $isEdited ? 'Update User' : 'Create User'; ?>">
		</form>
	</div>



	<script type="text/javascript">
		
		const pageLimit = document.querySelector("#page__limit");
		pageLimit.addEventListener("change", function(e) {
			const value = e.currentTarget.value;
			window.location.href = `database.php?limit=${value}&page=0`;
		});

		const searchBar = document.querySelector("#search__box");
		const searchValue = searchBar.querySelector("#search__input");
		searchBar.addEventListener("submit", function(e) {
			e.preventDefault();
			window.location.href = `database.php?limit=<?php echo $limit; ?>&page=0&q=${searchValue.value}&sortBy=<?php echo $sort; ?>`;
		});

		searchValue.addEventListener("input", function(e) {
			const value = e.currentTarget.value;

			if (value.length === 0) window.location.href = `database.php?limit=<?php echo $limit; ?>&page=0&q=`;
		});

		const sortBy = document.querySelector("#sort__by");
		sortBy.addEventListener("change", function(e) {
			const value = e.currentTarget.value;

			window.location.href = `database.php?limit<?php echo $limit; ?>&page=0&q=${searchValue.value}&sortBy=${value}`;
		});

	</script>
</body>
</html>