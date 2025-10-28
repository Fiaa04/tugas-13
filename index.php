<!DOCTYPE html>
<html>
<head>
	<title>CRUD Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">👨‍🎓 CRUD Data Siswa</h1>
		<h3 class="deskripsi">Aplikasi Manajemen Data Siswa - PHP Native</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">🏠 Home</a></li>
			<li><a href="index.php?page=data_siswa">📋 Data Siswa</a></li>
			<li><a href="index.php?page=tambah_siswa">➕ Tambah Siswa</a></li>
			<li><a href="index.php?page=tentang">ℹ️ Tentang</a></li>
		</ul>
	</div>

	<div class="badan">
		<?php 
			if(isset($_GET['page'])){
				switch ($_GET['page']) {
					case 'home': include "halaman/home.php"; break;
					case 'data_siswa': include "halaman/data_siswa.php"; break;
					case 'tambah_siswa': include "halaman/tambah_siswa.php"; break;
					case 'edit_siswa': include "halaman/edit_siswa.php"; break;
					case 'hapus_siswa': include "halaman/hapus_siswa.php"; break;
					case 'tentang': include "halaman/tentang.php"; break;
					default: echo "<center><h3>Halaman tidak ditemukan!</h3></center>"; break;
				}
			}else{
				include "halaman/home.php";
			}
		?>
	</div>

	<footer>
		<p>&copy; <?= date('Y'); ?> CRUD Data Siswa | <b>Page Dinamis</b></p>
	</footer>
</div>
</body>
</html>
