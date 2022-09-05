<?php
include "koneksi.php";

$id = $_POST['id'];


    $sql = "select * from pegawai where id=$id"; 

    $update = "update pegawai set
    nip = '$_POST[nip]',
    nama = '$_POST[nama]',
    pangkat = '$_POST[pangkat]',
    ruangan = '$_POST[ruangan]'
    where id = '$id'";

    mysqli_query($koneksi, $update);

    //alihkan ke halaman beranda
    header("location:datatables.php");


?>