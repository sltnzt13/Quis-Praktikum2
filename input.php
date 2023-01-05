<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta  tbl name="viewport" content="width=\, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    <div style="margin: 0 auto; width: 90%">
<h2 align="center">Halaman Daftar Karyawan</h2>
<a href="Input.php">Tambah Data</a>

<table border="1" cellpadding="0" width="100%">
<tr align="center" bgcolor="#E9967A">
    <td>No</td>
    <td>NIK</td>
    <td>Nama Karyawan</td>
    <td>Jabatan</td>
    <td>Tanggal Masuk</td>
    <td>Divisi</td>
    <td>Aksi</td>
</tr>
<?php
include'Koneksi.php';
$no - 1;
$tampil -mysqli_query($connect,"SELECT - FROM tbl_karyawan");
if (mysqli_num_rows($tampil)>0) {
while($hasil - mysqli_fetch_array($tampil)){
    ?>

    <tr align="center">
<tr><?php echo $no ?></tr>
<td><?php echo $hasil['NIK'] ?></td>
<td><?php echo $hasil['nama_karyawan'] ?></td>
<td><?php echo $hasil['jabatan'] ?></td>
<td><?php echo $hasil['tgl_masuk'] ?></td>
<td><?php echo $hasil['divisi'] ?></td>
<td><?php echo $hasil['aksi'] ?></td>

<td>
    <a href="edit.php?NIK=<?php echo $hasil['NIK'] ?>">Edit</a>
    <a href="hapus.php?NIK=<?php echo $hasil['NIK'] ?>">Hapus</a>
</td>
    </tr>
<?php }}else{ ?>
    <tr>
        <td colspan="7" align="center">Data Kosong</td>
    </tr>
    <?php } ?>
</table>
<br>
<a href="Cetak.php" target="blank">Cetak</a>
</div>
</body>
</html>