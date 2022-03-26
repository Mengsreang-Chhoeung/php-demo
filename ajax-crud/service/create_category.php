<?php
	include_once '../config/database_config.php';
    global $conn;

	// any variable for decorate
	$error_category_name = "";
	$error = 0;
	// request body
	$cat_name = "";
	$cat_notes = "";

	if (empty($_POST['cat_name'])) {
		$error_category_name = "Category name is required!";
		$error++;
	} else {
		$cat_name = mysqli_real_escape_string($conn, $_POST['cat_name']);
	}

	if (isset($_POST['cat_notes'])) {
		$cat_notes = mysqli_real_escape_string($conn, $_POST['cat_notes']);
	}

	if ($error === 0) {
		$query_name_exists = "SELECT * FROM categories WHERE cat_name = '$cat_name' AND deleted_at IS NULL";
		$result_query_name_exists = mysqli_query($conn, $query_name_exists);
		if ($result_query_name_exists) {
			if (mysqli_num_rows($result_query_name_exists) > 0) {
				$error_category_name = "Category name already exists!";
				$error++;
			} else {
				try {
					$query_create = "INSERT INTO categories (cat_name, cat_notes) VALUES ('$cat_name', '$cat_notes')";
					$result_query_create = mysqli_query($conn, $query_create);
				} catch (Exception $e) {
					throw Exception($e);
				}
			}
		}
	}

	if ($error > 0) {
		$data = array(
			"error"					=> true,
			"error_category_name"	=> $error_category_name,
		);
	} else {
		$data = array(
			"success"				=> true,
		);
	}

	echo json_encode($data);