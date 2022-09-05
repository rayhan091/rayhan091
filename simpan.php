<!DOCTYPE HTML>
<html>
<head>
<meta charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style3.css">
<title>Simpan Data Mahasiswa JNM</title>
</head>
<body>
<section>
 <div>
 <?php
  $nip=$_POST['nip'];
  $nama=$_POST['nama'];
  $jabatan=$_POST['jabatan'];
  $pangkat=$_POST['pangkat'];

  include "koneksi.php";
  $proses="INSERT INTO (pegawai)
  VALUES('$nip','$nama','$jabatan','$pangkat')";
  echo "<font color=red size=5>Data Mahasiswa Berhasil Diisi</font>";

 ?>
<br>
<a href="datatables.php"><h3>Lihat Data Mahasiswa</h3></a>
</div>
</section>
</body>
</html>