<?php
    include "koneksi.php";

    $id=$_GET['id'];
    //$sql=mysqli_query($koneksi,"select from pegawai where id='$_GET['id']'");
    $sql= "select * from pegawai where id=$id";
    $hasil = mysqli_query($koneksi,$sql);
    //$data=mysqli_fetch_array($sql);
    $data = mysqli_fetch_array($hasil);

?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <title>Halaman Input</title>
</head>

<body>
    <table>
        <h1>Data Pegawai</h1>
        <article>Silahkan Input Data Sesuai Form dibawah ini</article>
        <div>
            <form action="proses_edit.php" method="post">
                <label for="fname"></label>
                <input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>" placeholder="" required>

                <label for="fname">NIP Pegawai</label>
                <input type="text" id="nip" name="nip" value="<?php echo $data['nip'] ?>" placeholder="" required>

                <label for="lname">Nama</label>
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" placeholder="" required>

                <label for="fname">Pangkat</label>
                <input type="text" name="pangkat" value="<?php echo $data['pangkat'] ?>" placeholder="" required>

                <label for="fname">Ruangan</label>
                <input type="text" name="ruangan" value="<?php echo $data['ruangan'] ?>" placeholder="" required>
                <input type="submit" name="submit" value="Submit">
    
    </table>

        <div>
            <!-- <?php 

                if(isset($_POST['submit'])){

                    mysqli_query($koneksi, "update pegawai set
                    nip = '$_POST[nip]',
                    nama = '$_POST[nama]',
                    pangkat = '$_POST[pangkat]',
                    ruangan = '$_POST[ruangan]'
                    where id = '$_GET[id]");

                    echo "<font color=red size=5>Data Pegawai Berhasil Ditambahkan</font>";


                }
            ?> -->
          
            <div class="btn">
                <a style="text-decoration:none" href = "datatables.php"> << Kembali Ke Tabel Data </a>
            </div>
        </div>
</body>
</html>