<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "admin_tk";

    $conn = mysqli_connect($hostname,$username,$password,$database_name);

    if($conn -> connect_error){
        echo "koneksi gagal";
        die("koneksi putus");
    } 
?>