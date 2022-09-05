<?php
include "koneksi.php";

if(isset($_POST['submit'])){

    mysqli_query($koneksi, "insert into cuti set
    tanggal        = '$_POST[tanggal]',
    nama           = '$_POST[nama]',
    jabatan        = '$_POST[jabatan]',
    nip            = '$_POST[nip]',
    masa_kerja     = '$_POST[masa_kerja]',
    alasan         = '$_POST[alasan]',
    lama_cuti      = '$_POST[lama_cuti]',
    mulai_cuti     = '$_POST[mulai_cuti]',
    sampai_cuti    = '$_POST[sampai_cuti]',
    thn1           = '$_POST[thn1]',
    thn2           = '$_POST[thn2]',
    thn3           = '$_POST[thn3]',
    sisa1          = '$_POST[sisa1]',
    sisa2          = '$_POST[sisa2]',
    sisa3          = '$_POST[sisa3]',
    nama_penyetuju = '$_POST[nama_penyetuju]',
    nip_penyetuju  = '$_POST[nip_penyetuju]',
    nama_ketua     = '$_POST[nama_ketua]',
    nip_ketua      = '$_POST[nip_ketua]'");

}
    header("location:indexsurat.php");
    ?>