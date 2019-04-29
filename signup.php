<?php 

include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id'])){
  header('location:index.php');
}

if(isset($_POST['signup'])){
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);
  $email = trim($_POST["email"]);
  $check_query = " SELECT * FROM user
  WHERE username = :username";
  $statement = $connect->prepare($check_query);
  $check_data = array(
    ':username'   => $username
  );
  if($statement->execute($check_data)){
    if($statement->rowCount() > 0)
    {
      $message .= '<p><label>Username already taken</label></p>';
    }
    else{
      if(empty($username)){
        $message .= '<p><label>Username is required</label></p>';
      }
      if(empty($email)){
        $message .= '<p><label>email is required</label></p>';
      }
      if(empty($password)){
        $message .= '<p><label>Password is required</label></p>';
      }
      else{
        if($password != $_POST["confirm_password"]){
          $message .= '<p><label>Password does not match</label></p>';
        }
      }
      if($message == ''){
        $data = array(
          ':username'   => $username,
          ':email'   => $email,
          ':password'   => password_hash($password, PASSWORD_DEFAULT)
        );

        $query = "INSERT INTO user
        (username, password, email)
        VALUES (:username, :password, :email)
        ";

        $statement = $connect->prepare($query);

        if($statement->execute($data)){
          $message = '<label>Sign up completed</label>';
        }
      }
    }
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
            <h2 class="mt-4 mb-4">Sign up</h2>  
            
            <form method="post">
             <span class="text-danger"><?php echo $message; ?></span>
                <div class="form-group">
                    <label for="InputEmail1">Username</label>
                    <input type="text" name="username" class="form-control login-input" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="InputEmail2">Email</label>
                    <input type="email" name="email" class="form-control login-input" id="InputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="InputPassword1">Password</label>
                    <input type="password" name="password" class="form-control login-input" id="InputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="InputPassword2">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control login-input" id="InputPassword2" placeholder="Password">
                </div>
                <div class="form-group">
                <button type="submit" name="signup" class="btn btn-primary">Submit</button>
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
