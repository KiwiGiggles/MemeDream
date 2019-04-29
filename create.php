<?php
include "config.php";

$conn = new mysqli("localhost","aleohm-7",$password, "aleohm-7_user");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['post'])){
 
  $title = htmlspecialchars($_POST['name']);
  $name = $_FILES['img']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["img"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['img']['tmp_name']) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $query = "insert into post(title, image) values('$title', '$image')";
    mysqli_query($conn,$query);
  
    // Upload file
    //move_uploaded_file($_FILES['img']['tmp_name'],$target_dir.$name);
  }
 
  header('Location: index.php');
  exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/simple-sidebar.css" type="text/css">
    <link rel="shortcut icon" href="pictures/logo.png"/>

    <title>Popular - MemeDream</title>
  </head>
  <body>

    <div class="d-flex" id="wrapper">

      <?php 
        include 'Partials/sidebar.php';
      ?>

      <!-- Page Content -->
      <div id="page-content-wrapper">

      <?php 
          include 'Partials/navbar.php';
      ?>

        <div class="container-fluid">
            <h2 class="mt-4 mb-4">Create your post!</h2>  

          <!-- Post creator -->
          <form enctype="multipart/form-data" action="create.php" method="post">
            <div class="post">
            <div class="input-group" id="TitleInput">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Title: </span>
              </div>
              <input type="text" class="form-control" id="basic-url" name="name" aria-describedby="basic-addon3">
            </div>
              <div class="post-img-container">
                <div id="ImgArea">
                  <div class="form-group files" id="fileUploadDiv">
                    <label id="postLabel">Upload your image</label>
                    <input type="file" class="form-control" multiple="" name="img" id="FileForm">
                  </div>
                </div>
                <div class="btn-group post-footer">
                  <button type="button" class="btn btn-secondary post-footer-btn" disabled>Comments <span class="fas fa-comment-alt"></span></button>
                  <button type="button" class="btn btn-secondary post-footer-btn" disabled>Share <span class="fas fa-share"></span></button>
                  <button type="button" class="btn btn-secondary post-footer-btn" disabled>Save <span class="far fa-bookmark"></span></button>
                  <button type="button" class="btn btn-secondary post-footer-btn" disabled>Report <span class="fas fa-flag"></span></button>
                  <button type="button" class="btn btn-secondary post-footer-btn" disabled><span class="fas fa-arrow-up" data-fa-transform="grow-6"></span></button>
                  <button type="button" class="btn btn-secondary post-footer-btn" disabled>0</span></button>
                  <button type="button" class="btn btn-secondary post-footer-btn" disabled><span class="fas fa-arrow-down" data-fa-transform="grow-6"></span></button>
                </div>
              </div>
              <button type="submit" style="width: 100%; border-top-left-radius: 0; border-top-right-radius: 0;" class="btn btn-primary" name="post">Post</button>
            </div>
          </form>
          

        </div>
      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="JavaScript/script.js"></script>
    <script src="JavaScript/input file.js"></script>
  </body>
</html>
