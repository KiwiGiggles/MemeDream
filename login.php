<?php

include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id'])){
 header('location:index.php');
}

if(isset($_POST["login"])){
 $query = "
 SELECT * FROM user 
 WHERE username = :username";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
      ':username' => $_POST["username"]
     )
 );
 $count = $statement->rowCount();
 if($count > 0)
 {
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   if(password_verify($_POST['password'], $row['password'])){
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['username'] = $row['username'];
    header('location:index.php');
   }
   else
   {
    $message = '<label>Wrong Password</label>';
   }
  }
 }
 else
 {
  $message = '<label>Wrong Username</labe>';
 }
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

      <!-- Sidebar -->
      <div class="bg-dark border-right" style="border-right: 1px solid rgba(0,0,0,.125)!important;" id="sidebar-wrapper">
        <div class="sidebar-heading" style="color: white;">Followed users</div>
        <div class="list-group list-group-flush">
          <p style="color: white; margin: 5px;">You need to <a href="http://tor.skelamp.se/aleohm-7/w/MemeDream/login.php">login</a> to see followed users</p>
          <p style="color: white; margin: 5px;">Don't have an account? <a href="http://tor.skelamp.se/aleohm-7/w/MemeDream/signup.php">Sign up</a>!</p>
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
              <button class="btn btn-outline-primary my-2 my-sm-0 create-btn" id="CreateBtn" type="button">Create</button>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="http://tor.skelamp.se/aleohm-7/w/MemeDream/login.php">Login <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="http://tor.skelamp.se/aleohm-7/w/MemeDream/signup.php">Sign up <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
      </nav>

        <div class="container-fluid">
            <h2 class="mt-4 mb-4">Login</h2>  
          
            <form method="post">
              <p class="text-danger"><?php echo $message; ?></p>
                <div class="form-group">
                    <label for="loginUsername">Username</label>
                    <input type="text" class="form-control login-input" name="username" id="loginUsername" placeholder="Username" required/>
                </div>
                <!--<div class="form-group">
                    <label for="loginEmail">Email address</label>
                    <input type="email" class="form-control login-input" name="email" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email" required/>
                </div>-->
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" class="form-control login-input" name="password" id="loginPassword" placeholder="Password"req>
                </div>
                <div style="display: inline-block; width: 500px;">
                  <button type="submit" class="btn btn-primary" name="login">Submit</button>
                  <p style="color: white; margin: 5px; float: right;"><a href="http://tor.skelamp.se/aleohm-7/w/MemeDream/signup.php">Don't have an account?</a></p>
                  <p style="color: white; margin: 5px; float: right;"><a href="http://tor.skelamp.se/aleohm-7/w/MemeDream/forgot password.php">Forgot password?</a></p>
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
