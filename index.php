<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System informasi Kepegawaian</title>
</head>
<body>
<h2 style=" padding: 1px 20px;"></h2>
<form action="" method="POST"> 
    <table>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><input type="text" name="NIK" placeholder="NIK"></td>
    </tr>
    <tr>
        <td>Nama Karyawan</td>
        <td>:</td>
        <td><input type="text" name="nama_karyawan" placeholder="Nma Karyawan"></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><input type="text" name="jabatan" placeholder="Jabatan"></td>
    </tr>
    <tr>
        <td>Tanggal Masuk</td>
        <td>:</td>
        <td><input type="date" name="tgl_masuk" placeholder="Tanggal Masuk"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="sumbit" name="simpan"></td>
    </tr>
    </table>
</form>
<?php
include'Koneksi.php';
if(isset($_POST["simpan"])){
    $NIK - $_POST['NIK'];
    $nama_karyawan =$_POT['nama_karyawan'];
    $jabatan - $_POST[jabatan];
    $tgl_masuk - $_POST['tgl_masuk'];
    $divisi - $_POST['divisi'];
    $input - "INSERT INTO tbl_karyawa values ('$NIK','$nama','$jabatan','$tgl_masuk','$divisi')"
    mysqli_query($connect, $sinput);
    header('location:index.php'); 
}
?>
<body>
    </html>