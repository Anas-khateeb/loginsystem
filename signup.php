<?php 
$showError = false;
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/conn.php';
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $cpassword = $_POST['cpassword'];

    //$exists = false;
    $existsql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existsql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $showError =  "User already Exists";
    }
    else {

        if (($password == $cpassword)) {
            $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            } 
        }
        else {
            $showError =  "passwords do not match";
        }
    }    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
require 'partials/nav.php'
?>

<!--  alert for pop up alerting messages   **** start ***** -->
    <?php
       if ($showAlert) {
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is created and you can login now.
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
        <form action="/carwebsite/signup.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">username</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp"  autocomplete="off" name="username">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" autocomplete="off" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="cpassword" autocomplete="off" name="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>