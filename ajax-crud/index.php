<?php $page_title = "Home | Ajax Crud"; include_once './assets/header.php'; ?>

<div class="w-100 d-flex justify-content-center mt-5">
	<form class="d-flex" id="search__box">
	    <input class="form-control me-2" type="search" placeholder="Search name" aria-label="Search" id="search__input">
	    <button class="btn btn-outline-success" type="submit">Search</button>
	</form>
	<div style="width: 20px;"></div>
	<div class="d-flex align-items-center" style="width: 200px;">
		<span style="width: 45%; margin-right: 5%;">Sort by: </span>
		<select class="form-select" style="width: 50%;" id="sort__by">
			<option>New</option>
			<option>Old</option>
		</select>
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
				$query = "SELECT * FROM users WHERE LOWER( username ) LIKE LOWER ( '%%' ) ORDER BY user_id DESC LIMIT 10 OFFSET 10";
				$result = mysqli_query($conn, $query);
				// $queryCount = "SELECT * FROM users WHERE LOWER( username ) LIKE LOWER ( '%%' )";
				// $resultCount = mysqli_query($conn, $queryCount);

				// $count = mysqli_num_rows($resultCount);
				// $countPage = ceil( $count / $limit );

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
		<li class="page-item disabled">
		    <a class="page-link" href="#">Previous</a>
		</li>
		<li class="page-item active">
		    <a class="page-link" href="#">1</a>
		</li>
		<li class="page-item">
		    <a class="page-link" href="#">Next</a>
		</li>
	</ul>
	<div style="width: 20px;"></div>
	<div class="d-flex align-items-center" style="width: 200px;">
		<select class="form-select" style="width: 50%;" id="page__limit">
			<option>5</option>
			<option>15</option>
			<option>25</option>
			<option>100</option>
		</select>
		<span style="width: 45%; margin-left: 5%;"> / Page</span>
	</div>
</nav>

<div class="w-100 d-flex justify-content-center my-5">
	<form method="POST" class="w-50">
		<input type="hidden" name="id">
		<div class="form-group mb-3">
			<label>Username:</label>
			<input type="text" name="usename" class="form-control">
		</div>
		<div class="form-group mb-3">
			<label>Sex:</label>
			<select class="form-select" name="sex">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				  <option value="Other">Other</option>
			</select>
		</div>
		<div class="form-group mb-3">
			<label>Position:</label>
			<input type="text" name="position" class="form-control">
		</div>
		<input type="submit" name="submit" class="btn btn-primary" value="Submit">
	</form>
</div>

<?php include_once './assets/footer.php'; ?>