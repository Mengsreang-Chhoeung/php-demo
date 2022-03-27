<?php $page_title = "Home | Ajax Crud"; include_once './assets/header.php'; global $conn, $base_url; ?>

<div class="w-100 d-flex justify-content-center mt-5">
	<button class="btn btn-primary create_category_btn" type="button"><i class="fa-solid fa-square-plus"></i> Create Category</button>
	<div style="width: 20px;"></div>
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
				<th>Created Date</th>
				<th>Category Name</th>
				<th>Notes</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = "SELECT * FROM categories WHERE LOWER( cat_name ) LIKE LOWER ( '%%' ) AND deleted_at IS NULL ORDER BY cat_id DESC";
				$result = mysqli_query($conn, $query);
				// $queryCount = "SELECT * FROM users WHERE LOWER( username ) LIKE LOWER ( '%%' )";
				// $resultCount = mysqli_query($conn, $queryCount);

				// $count = mysqli_num_rows($resultCount);
				// $countPage = ceil( $count / $limit );

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$category_id = $row['cat_id'];
						$created_at = $row['created_at'];
						$category_name = $row['cat_name'];
						$category_notes = $row['cat_notes'];

						?>
							<tr>
								<td><?php echo $category_id; ?></td>
								<td><?php echo $created_at; ?></td>
								<td><?php echo $category_name; ?></td>
								<td><?php echo $category_notes; ?></td>
								<td class="d-flex align-items-center">
									<a class="btn btn-warning" href="database.php?edit=<?= $category_id; ?>">Edit</a>
									<div style="width: 10px;"></div>
									<a class="btn btn-info" href="database2.php?detail=<?= $category_id; ?>">Detail</a>
									<div style="width: 10px;"></div>
									<a class="btn btn-danger" href="database.php?delete=<?= $category_id; ?>">Delete</a>
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

<!-- Modal Create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
	    <div class="modal-content">
	      	<div class="modal-header">
		        <h5 class="modal-title" id="createModalLabel">Create Category</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      	</div>
	      	<form method="POST" id="create_category_form">
	      		<div class="modal-body">
		        	<div class="form-group mb-3">
						<label>Category Name: <span class="required"><i class="fa-solid fa-asterisk"></i></span></label>
						<input type="text" name="cat_name" class="form-control category_name_input">
						<small class="text-danger" id="error_category_name"></small>
					</div>
					<div class="form-group mb-3">
						<label>Notes:</label>
						<textarea class="form-control category_notes_input" name="cat_notes"></textarea>
                        <small class="text-danger" id="error_category_notes"></small>
					</div>
		      	</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        	<input type="submit" class="btn btn-primary category_submit_btn" name="create_category" value="Create">
		      	</div>
	      	</form>
	    </div>
  	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		// Open create modal
		const createCategoryBtn = $(".create_category_btn");
		const createCategoryModal = $("#createModal");
		createCategoryBtn.click(function() {
			const myModal = new bootstrap.Modal(createCategoryModal);
			myModal.show();
		});

        // Validate create category modal when input...
        const categoryNameInput = $(".category_name_input");
        const errorCategoryName = $("#error_category_name");
        const categoryNotesInput = $(".category_notes_input");
        const errorCategoryNotes = $("#error_category_notes");
        categoryNameInput.on("input", function () {
            const categoryNameValue = $(this).val();
            if (categoryNameValue === '') {
                categoryNameInput.addClass("error");
                errorCategoryName.text("Category name is required!");
            } else if (categoryNameValue.length > 30) {
                categoryNameInput.addClass("error");
                errorCategoryName.text("Category name cannot be longer than 30 characters!");
            } else {
                categoryNameInput.removeClass("error");
                categoryNameInput.addClass("success");
                errorCategoryName.text("");
            }
        });
        categoryNotesInput.on("input", function () {
            const categoryNotesValue = $(this).val();
            if (categoryNotesValue.length > 150) {
                categoryNotesInput.addClass("error");
                errorCategoryNotes.text("Category notes cannot be longer than 150 characters!");
            } else {
                categoryNotesInput.removeClass("error");
                categoryNotesInput.addClass("success");
                errorCategoryNotes.text("");
            }
        });

		// Create category using Ajax
		const createCategoryForm = $("#create_category_form");
		createCategoryForm.on('submit', function(e) {
			e.preventDefault();
            const createCategoryFormAction = "<?= $base_url; ?>/service/create_category.php";
            const createCategoryFormMethod = createCategoryForm.attr("method");
            const createCategoryFormData = $(this).serialize();
            const categorySubmitBtn = $(".category_submit_btn");
            const categoryNameValue = categoryNameInput.val();
            const categoryNotesValue = categoryNotesInput.val();
            if (categoryNameValue === '') {
                categoryNameInput.addClass("error");
                errorCategoryName.text("Category name is required!");
            } else if (categoryNameValue.length > 30) {
                categoryNameInput.addClass("error");
                errorCategoryName.text("Category name cannot be longer than 30 characters!");
            } else if (categoryNotesValue.length > 150) {
                categoryNotesInput.addClass("error");
                errorCategoryNotes.text("Category notes cannot be longer than 150 characters!");
            } else {
                categoryNameInput.removeClass("error");
                categoryNameInput.addClass("success");
                errorCategoryName.text("");
                categoryNotesInput.removeClass("error");
                categoryNotesInput.addClass("success");
                errorCategoryNotes.text("");
                $.ajax({
                    url: createCategoryFormAction,
                    method: createCategoryFormMethod,
                    data: createCategoryFormData,
                    dataType: "json",
                    beforeSend() {
                        categorySubmitBtn.val("Validate...");
                        categorySubmitBtn.attr("disabled", true);
                    },
                    success: function (data) {
                        categorySubmitBtn.val("Create");
                        categorySubmitBtn.attr("disabled", false);

                        if (data.success === true) {
                            location.href = "<?= $base_url; ?>";
                        }

                        if (data.success === false && data.category_name_error !== "") {
                            errorCategoryName.text(data.category_name_error);
                        } else {
                            errorCategoryName.text("");
                        }

                        if (data.success === false && data.error !== "") {
                            alert(data.error);
                        }
                    },
                });
            }
		});
	});
</script>

<?php include_once './assets/footer.php'; ?>