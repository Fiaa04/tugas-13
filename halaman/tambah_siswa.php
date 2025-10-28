<h2>➕ Tambah Data Siswa</h2>

<form method="POST" action="">
    <label>Nama Siswa</label><br>
    <input type="text" name="nama_siswa" required><br><br>

    <label>Kelas</label><br>
    <input type="text" name="kelas" required><br><br>

    <label>Alamat</label><br>
    <textarea name="alamat" required></textarea><br><br>

    <label>No. HP</label><br>
    <input type="number" name="no_hp" required><br><br>

    <label>Umur</label><br>
    <input type="number" name="umur" required><br><br>

    <input type="submit" name="simpan" value="Simpan">
</form>

<?php
include "config/config.php";

if (isset($_POST['simpan'])) {
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $umur = $_POST['umur'];

    $query = "INSERT INTO siswa (nama_siswa, kelas, alamat, no_hp, umur) 
              VALUES ('$nama_siswa', '$kelas', '$alamat', '$no_hp', '$umur')";
    
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Data berhasil disimpan!');
                window.location.href='index.php?page=data_siswa';
              </script>";
    } else {
        echo "<script>alert('Gagal menyimpan data!');</script>";
    }
}
?>