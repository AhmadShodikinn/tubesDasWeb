<?php 

    $host     = "localhost" ;
    $username = "root";
    $pass     = "";
    $database = "db_restoran";

    $mysqli = new mysqli($host, $username, $pass, $database);
    
    //cek koneksi
    if(mysqli_connect_errno()){
        echo "Koneksi gagal ngap : " . mysqli_connect_error();
    } 
        // echo "Mantep terhubung";

?>