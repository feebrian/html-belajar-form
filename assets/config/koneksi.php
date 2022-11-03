<?php
    // Koneksi Database
    $server   = "localhost";
    $user     = "root";
    $password = "adamullet123!";
    $database = "rpl";
  
    // Membuat Koneksi Database
    $koneksi  = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));