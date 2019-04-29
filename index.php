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

        <div class="container-fluid" >

          <div class="">
            <h2 class="mt-4 mb-4">Popular posts today</h2>
            
            <!-- Posts -->
            <div>
              <?php
                  $query = mysqli_query($conn, "SELECT * FROM post") or die("Could not load image!");
                  $count = mysqli_num_rows($query);

                for ($i = 1; $i <= $count; $i++) {
                  $query = mysqli_query($conn, "SELECT image FROM post WHERE id=$count-$i+1") or die("Could not load image!");
                  $row = mysqli_fetch_array($query);
                  $image_src = $row['image'];

                  $query = mysqli_query($conn, "SELECT title FROM post WHERE id=$count-$i+1") or die("Could not load title!");
                  $row = mysqli_fetch_array($query);
                  $title = $row['title'];

                  echo ('
                    <div class="post">
                    <div class="op">
                      <img class="op-prof-pic" src="pictures/1200px-765Oranguru.png">
                      <p class="op-desc">This post was made by <a class="op-name" href="#">You!</a></p>
                    </div>
                    <h2 class="post-title">'.$title.'</h2>
                    <div class="post-img-container">
                    <img class="post-img" src="'.$image_src.'">
                      <div class="btn-group post-footer">
                        <button type="button" class="btn btn-secondary post-footer-btn">Comments <span class="fas fa-comment-alt"></span></button>
                        <button type="button" class="btn btn-secondary post-footer-btn">Share <span class="fas fa-share"></span></button>
                        <button type="button" class="btn btn-secondary post-footer-btn">Save <span class="far fa-bookmark"></span></button>
                        <button type="button" class="btn btn-secondary post-footer-btn">Report <span class="fas fa-flag"></span></button>
                        <button type="button" class="btn btn-secondary post-footer-btn vote-btn" id="upVoteBtn"><i class="fas fa-arrow-up" data-fa-transform="grow-6"></i></button>
                        <input type="button" class="btn btn-secondary post-footer-btn" id="rating" value="0">
                        <button type="button" class="btn btn-secondary post-footer-btn vote-btn" id="downVoteBtn"><i class="fas fa-arrow-down" data-fa-transform="grow-6"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="centerContent">
                  ');
                }
              ?>
            </div>
            </div>
          </div>
          
        </div>
      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
    <script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="JavaScript/script.js"></script>
  </body>
</html>
