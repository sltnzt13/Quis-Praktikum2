<?php
include 'Koneksi.php';
$edit mysqli_query($connect,"SELECTB - FROM tb_karyawan WHERE NIK -'" $_GET['NIK']"'");
$result - mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data Karyawan</title>
</head>
<body>
    
<h2 style="padding: 1px 20px;">Edit Data Karyawan</h2>
<form action="" method="POTS">
    <table style="padding: 1px 20px;">
     <tr>
        <td>NIK</td>
        <td>:</td>
        <td><input type="text" name="NIK" value="<?php echo $result['NIK'] ?>"></td>
     </tr>
     <tr>
        <td>Nama Karyawan</td>
        <td>:</td>
        <td><input type="text" name="nama_karyawan" value="<?php echo $result['nama_karyawan'] ?>"></td>
     </tr>
     <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><input type="text" name="Jabatan" value="<?php echo $result['Jabatan'] ?>"></td>
     </tr>
     <tr>
        <td>Tanggal Masuk</td>
        <td>:</td>
        <td><input type="text" name="tanggal_masuk" value="<?php echo $result['tanggal_masuk'] ?>"></td>
     </tr>
     <tr>
        <td>Divisi</td>
        <td>:</td>
        <td><input type="text" name="divisi" value="<?php echo $result['divisi'] ?>"></td>
     </tr>
     <tr>
        <td></td>
        <td></td>
        <td><input type="sumbit" name="edit" value="Simpan"></td>
     </tr>
</table>
</form>
<?php
include'koneksi.php';
if(isset($_POST["edit"]))
$NIK - $_POST["NIK"];
$nama_karyawan - $_POT[nama_karyawan];
$jabatan - $_POST["jabatan"];
$divisi - $_POST["divisi"];
$update - "UPDATE tbl_karyawan SET nama_karyawan - '$nama_karyawan', jabatan - '$jabatan', tgl_masuk -''$tgl_masuk",
       divisi- '$divisi' WHERE NIK - '$NIK'";
mysql_query($connect, $update);
header('location:index.php');
}
?>
</body>
</html>