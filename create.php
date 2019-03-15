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

      <!-- Sidebar -->
      <div class="bg-dark border-right" style="border-right: 1px solid rgba(0,0,0,.125)!important;" id="sidebar-wrapper">
        <div class="sidebar-heading" style="color: white;">Followed users</div>
        <div class="list-group list-group-flush">
          <p style="color: white; margin: 5px;">You need to <a href="#">login</a> to see followed users</p>
          <p style="color: white; margin: 5px;">Don't have an account? <a href="#">Sign up</a>!</p>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <button class="btn btn-primary" style="margin-right: 10px;" id="menu-toggle"><i class="fas fa-caret-left" data-fa-transform="grow-12"></i></span></button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="navbar-brand" href="index.php">MemeDream</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Popular <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hot</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">New</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
              <button class="btn btn-outline-primary my-2 my-sm-0 create-btn" type="submit">Create</button>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Sign up <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
      </nav>

        <div class="container-fluid">
            <h2 class="mt-4 mb-4">Create your post!</h2>  

          <!-- Post creator -->
          <div class="post">
            <div class="op">
              <img class="oc-prof-pic" src="pictures/1200px-765Oranguru.png">
              <p class="op-desc">This post was made by <a class="op-name" href="#">Osman</a> 5 minutes ago.</p>
            </div>
            <h2 class="post-title">Knugen! King of Sweden!</h2>
            <br>
            <input>
            <div class="post-img-container">
              <img class="post-img" src="pictures/knugen6.png">
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
          </div>

        </div>
      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

 
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="JavaScript/script.js"></script>
  </body>
</html>
