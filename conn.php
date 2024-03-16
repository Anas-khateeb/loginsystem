<?php 

    $server = "localhost";
    $username = "root";
    $pass = "";
    $db = "car";

    $conn = mysqli_connect($server,$username,$pass,$db);

    if ($conn ==true) {
        //echo "connected";
    }
    else {
        die( "Error". mysqli_connect_error());
    }

?>