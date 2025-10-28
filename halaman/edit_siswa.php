<?php 
include "config/config.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>✏️ Edit Data Siswa</h2>

<form method="post" action="">
	<label>Nama Siswa</label><br>
	<input type="text" name="nama_siswa" value="<?= $d['nama_siswa']; ?>" required><br><br>

	<label>Kelas</label><br>
	<input type="text" name="kelas" value="<?= $d['kelas']; ?>" required><br><br>

	<label>No Hp</label><br>
	<input type="number" name="no_hp" value="<?= $d['no_hp']; ?>" required><br><br>

	<input type="submit" name="update" value="Update Data" class="btn">
</form>

<?php
if(isset($_POST['update'])){
	$nama = $_POST['nama_siswa'];
	$kelas = $_POST['kelas'];
	$absen = $_POST['absen'];

	mysqli_query($koneksi, "UPDATE siswa SET nama_siswa='$nama', kelas='$kelas', absen='$absen' WHERE id_siswa='$id'");
	echo "<script>alert('Data berhasil diperbarui');window.location='index.php?page=data_siswa';</script>";
}
?>
