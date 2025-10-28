<?php
$host = "localhost";
$user = "xirpl1-11";        
$pass = "0098375178";            
$db   = "db_xirpl1-11_1"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("❌ Koneksi database gagal: " . mysqli_connect_error());
} else {
  //  echo "✅ Koneksi berhasil ke database: <b>$db</b><br>";
}

//$cek = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah FROM siswa");
//$row = mysqli_fetch_assoc($cek);
//echo "📊 Total data siswa: <b>" . $row['jumlah'] . "</b>";
?>
