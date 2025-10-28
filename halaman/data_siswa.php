<?php
include "config/config.php";
?>

<h2>📋 Data Siswa</h2>
<a href="index.php?page=tambah_siswa" class="btn">➕ Tambah Siswa</a>
<br><br>

<table border="1" cellspacing="0" cellpadding="8" width="100%">
    <tr style="background-color: #6a0dad; color: white;">
        <th>ID</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No. HP</th>
        <th>Umur</th>
        <th>Aksi</th>
    </tr>

    <?php
    $data = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id_siswa DESC");
    if (mysqli_num_rows($data) > 0) {
        while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?= $d['id_siswa']; ?></td>
        <td><?= $d['nama_siswa']; ?></td>
        <td><?= $d['kelas']; ?></td>
        <td><?= $d['alamat']; ?></td>
        <td><?= $d['no_hp']; ?></td>
        <td><?= $d['umur']; ?></td>
        <td>
            <a href="index.php?page=edit_siswa&id=<?= $d['id_siswa']; ?>" class="btn">✏️ Edit</a>
            <a href="index.php?page=hapus_siswa&id=<?= $d['id_siswa']; ?>" class="btn danger" onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</a>
        </td>
    </tr>
    <?php 
        }
    } else {
        echo "<tr><td colspan='7' align='center'>Belum ada data siswa.</td></tr>";
    }
    ?>
</table>
