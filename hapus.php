<?php
session_start();
include "koneksi.php"; // masukan konekasi DB
// ambil variable ID dari URL
$id = @$_GET['id'];
//Proses query hapus data
$del=mysqli_query($koneksi,"delete from pegawai where id='$id'");
if($del){
$_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil dihapus.</font>';
header("location:table_pegawai.php"); // kembali ke tampil data
}else{
echo "Gagal hapus data!";
}?>