<?php
  session_start();
  include "config.php";

  $db = new PDO("mysql:host=localhost;dbname={$dbprefix}user;charset=utf8", $username, $password);

  if (isset($_POST['signup'])) {
    $un = htmlspecialchars($_POST['username']);
    $pw = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $sql = "INSERT INTO user (Username, Password, Email) VALUES ('$un', '$pw', '$email');";

    $ps = $db->prepare($sql);
    $ps->execute();

    header('Location: signup.1.php');
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
            <h2 class="mt-4 mb-4">Sign up</h2>  
            
            <form method="post">
                <div class="form-group">
                    <label for="signupUsername">Username</label>
                    <input type="text" class="form-control login-input" name="username" id="signupUsername" aria-describedby="emailHelp" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="signupEmail">Email address</label>
                    <input type="email" class="form-control login-input" name="email" id="signupEmail" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="signupPassword">Password</label>
                    <input type="password" class="form-control login-input" name="password" id="signupPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="signupConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control login-input" name="confirm_password" id="signupConfirmPassword" placeholder="Password">
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-primary" name="signup" value="submit" />
                </div>
            </form>
        </div>
      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper  -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="JavaScript/script.js"></script>
  </body>
</html>
