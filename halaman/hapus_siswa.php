<?php 
include "config/config.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM siswa WHERE id_siswa='$id'");
echo "<script>alert('Data siswa berhasil dihapus!');window.location='index.php?page=data_siswa';</script>";
?>
