<?php
include "config.php";

$conn = new mysqli("localhost","aleohm-7",$password, "aleohm-7_user");
$output = "";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

    $query = mysqli_query($conn, "SELECT * FROM user WHERE Username LIKE '%$searchq%'") or die("Could not search!");
    $count = mysqli_num_rows($query);
    if($count == 0){
        $output = "There was no search results";
    }
    else{
        while($row = mysqli_fetch_array($query)){
            $username = $row['Username'];
            $id = $row['#'];

            $output .= '<div>'.$id.' '.$username.'</div>';
        }
    }
}
?>

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
        <form class="form-inline my-2 my-lg-0" action="search result.php" method="post">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        <button class="btn btn-primary my-2 my-sm-0 create-btn" id="CreateBtn" type="button">Create</button>
        </form>
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="signup.1.php">Sign up <span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </div>
</nav>
