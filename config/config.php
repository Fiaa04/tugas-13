<?php
$host = "localhost";
$user = "xirpl1-11";        
$pass = "0098375178";            
$db   = "db_xirpl1-11_1"; 

$koneksi = mysqli_connect($host, $user, $pass, "$db_xirpl1-11_1");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>