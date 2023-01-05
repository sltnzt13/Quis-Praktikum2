<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    <div style="margin : 0 auto; width:90%">
<h2 align="center">Data Karyawan</h2>
<table align="center" border="1" cellpadding="0" width="100%">
    <tr>
        <td align="center">No</td>
        <td align="center">NIK</td>
        <td align="center">Nama Karyawan</td>
        <td align="center">Jabatan</td>
        <td align="center">Tanggal Masuk</td>
        <td align="center">Divisi</td>

    </tr>

    <?php
     include 'Koneksi.php';
     $no -1;
     $tampil-mysqli_query($conncet,"SELECT - FROM tbl_karyawan");
</table>

</table>

</div>
    
</body>
</html>