<?php 
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/conn.php';
    $username = $_POST['username'];
    $password = $_POST['password']; 
    
    $sql = "Select * from users where username ='$username' AND password ='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1 ) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
       header("location: index.php");
    }
    else {
        $showError =  "Invalid Credentials";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
require 'partials/nav.php'
?>

<!--  alert for pop up alerting messages   **** start ***** -->
    <?php
       if ($login) {
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
       }

       if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
   }
    ?>
<!--  alert for pop up alerting messages   **** end ***** -->
<div class="container">
    <div class="row mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form action="/carwebsite/login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">username</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp"  autocomplete="off" name="username">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" autocomplete="off" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>