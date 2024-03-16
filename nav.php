<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true) {
  $loggedin = true;
  exit;
}
else{
  $loggedin = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
  echo
      '<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Just-Aroo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/carwebsite/about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/carwebsite/services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/carwebsite/contact.php">Contact</a>
              </li>';
          if (!$loggedin) {
             echo  '<li class="nav-item">
                      <a class="nav-link" href="/carwebsite/login.php">login</a>
                    </li>
                  <li class="nav-item">
                <a class="nav-link" href="/carwebsite/signup.php">signup</a>
              </li>';
          } 
          if ($loggedin) {
             echo    '<li class="nav-item">
                <a class="nav-link" href="/carwebsite/logout.php">logout</a>
              </li>';
          } 

    echo  
         '</ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>';
?>
</body>

</html>