<?php
  session_start();
  include "config.php";

  if (isset($_POST['login'])) {
    $un = htmlspecialchars($_POST['username']);
    $pw = htmlspecialchars($_POST['password']);
    $sql = "SELECT * FROM user
    WHERE username='$un' AND password='$pw'";
    $ps = $db->prepare($sql);
    $ps->execute();

    if ($ps->fetch()) {
    $_SESSION['username'] = $un;
    header('Location: login.php');
    exit;
    }
    else {
        echo "Wrong username of password";
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

      <?php 
        include 'Partials/sidebar.php';
      ?>

      <!-- Page Content -->
      <div id="page-content-wrapper">

      <?php 
          include 'Partials/navbar.php';
      ?>

        <div class="container-fluid">
            <h2 class="mt-4 mb-4">Login</h2>  

            <div class="centerContent">
              <form>
                <div class="form-group">
                    <label for="loginUsername">Username</label>
                    <input type="username" class="form-control login-input" name="username" id="loginUsername" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" class="form-control login-input" name="password" id="loginPassword" placeholder="Password">
                </div>
                <div style="display: inline-block; width: 500px;">
                  <button type="submit" class="btn btn-primary" name="login">Submit</button>
                  <p style="color: white; margin: 5px; float: right;"><a href="signup.php">Don't have an account?</a></p>
                  <p style="color: white; margin: 5px; float: right;"><a href="forgot password.php">Forgot password?</a></p>
                </div>
              </form>
            </div>

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
  </body>
</html>
