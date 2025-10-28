<?php
// Konfigurasi koneksi ke database MySQL
$host = "localhost";
$user = "root";        // default user XAMPP
$pass = "";            // kosongkan jika tidak ada password
$db   = "db_xirpl1-11_1"; // ganti sesuai nama database kamu di phpMyAdmin

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>