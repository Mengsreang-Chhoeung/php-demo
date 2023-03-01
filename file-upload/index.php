<?php
	$pageTitle = "File Upload";
	include_once 'assets/header.php';
   $file_name_value = "";
   $file_name_error_required = "";
?>

<?php
   if (isset($_POST['submit'])) {
      $file = $_FILES['file'];

      $fileName = $file['name'];
      $fileTmpName = $file['tmp_name'];
      $fileSize = $file['size'];
      $fileError = $file['error'];
      $fileType = $file['type'];

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));
      
      $allowedFile = array('jpg', 'jpeg', 'png');

      if (in_array($fileActualExt, $allowedFile)) {
         if ($fileError === 0) {
            if ($fileSize < 26214400) {
               $fileNameUUID = uniqid('', true) . "." . $fileActualExt;
               $fileDestination = "img/" . $fileNameUUID;
               try {
                  move_uploaded_file($fileTmpName, $fileDestination);
                  $queryFileNameExists = "SELECT file_id FROM file_upload WHERE BINARY name = '$fileName'";
                  $resultQueryFileNameExists = mysqli_query($conn, $queryFileNameExists);
                  if (mysqli_num_rows($resultQueryFileNameExists) > 0) {
                     $query = "INSERT INTO file_upload(name, url, size, type, tmp) VALUES ('$fileNameUUID', '$fileNameUUID', $fileSize, '$fileType', '$fileTmpName')";
                  } else {
                     $query = "INSERT INTO file_upload(name, url, size, type, tmp) VALUES ('$fileName', '$fileNameUUID', $fileSize, '$fileType', '$fileTmpName')";
                  }
                  
                  $result = mysqli_query($conn, $query);
                  if (!$result) {
                     echo "<script>alert('Erorr uploading file!')</script>";
                  } else {
                     header('Location: index.php');
                  }
               } catch (Exception $e) {
                  throw Exception($e);
               }
            } else {
               echo "Your file is too big!";
            }
         } else {
            echo "There was an error while uploading file!";
         }
      } else {
         echo "You cannot upload file of this type!";
      }
   }
?>

<?php 
   if (isset($_GET['delete'])) {
      $fileID = $_GET['delete'];

      $queryExists = "SELECT * FROM file_upload WHERE file_id = $fileID LIMIT 1";
      $resultQueryExists = mysqli_query($conn, $queryExists);

      if (mysqli_num_rows($resultQueryExists) > 0) {
         while ($row = mysqli_fetch_assoc($resultQueryExists)) {
            $fileUrl = $row['url'];
            $fullFileUrl = getcwd() . '/img/' . $fileUrl;
         }
         if (file_exists($fullFileUrl)) {
            try {
               unlink($fullFileUrl);
               $queryDelete = "DELETE FROM file_upload WHERE file_id = $fileID";
               $resultQueryDelete = mysqli_query($conn, $queryDelete);
               if (!$resultQueryDelete) {
                  echo "<script>alert('Erorr deleting file!')</script>";
               } else {
                  header('Location: index.php');
               }
            } catch (Exception $e) {
               throw Exception($e);
            }
         } else {
            echo "File not found!";
         }
      } else {
         echo "File not found!";
      }

   }
?>

<section class="gallery min-vh-100">

   <div class="container-lg">
      <form method="POST" enctype="multipart/form-data">
         <div class="mb-3">
           <label for="formFile" class="form-label">Choose image file to upload!</label>
           <input class="form-control" type="file" name="file">
         </div>
         <div class="mb-4">
            <input class="form-control btn btn-success" type="submit" name="submit" value="Upload">
         </div>
      </form>
   </div>

   <div class="container-lg">
      <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
         <?php
            $query = "SELECT * FROM file_upload ORDER BY file_id DESC";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_assoc($result)) {
                  $file_id = $row['file_id'];
                  $file_name = $row['name'];
                  $file_url = $row['url'];
                  $file_size = $row['size'];
                  $file_type = $row['type'];
                  ?>
                     <div class="col">
                        <img src="img/<?= $file_url; ?>" fileid="<?= $file_id; ?>" title="<?= $file_name; ?>" class="gallery-item" alt="<?= $file_name; ?>">
                        <div class="w-100 bg-light p-3">
                           <a class="btn btn-danger" href="index.php?delete=<?= $file_id; ?>" style="width: 100%;">
                              <i class="fas fa-trash-alt"></i>
                           </a>
                        </div>
                     </div>
                  <?php
               }
            } else {
               ?>
               <div class="w-100 d-flex justify-content-center">
                  <div>
                     <img src="https://img.freepik.com/free-vector/no-data-concept-illustration_114360-536.jpg?size=338&ext=jpg" class="gallery-item" alt="picture>">
                  </div>
               </div>  
               <?php
            }
         ?>
      </div>
   </div>
</section>

<!-- Modal Image -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <img src="img/1.jpg" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
</div>

<?php
	include_once 'assets/footer.php';
?>