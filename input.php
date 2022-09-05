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
        	<!-- apabila upload file harus tambahkan enctype="multipart/form-data"-->
            <form action="input.php" method="post" enctype="multipart/form-data">
                <label for="fname">NIP Pegawai</label>
                <input type="text" id="nip" name="nip" placeholder="" required>

                <label for="lname">Nama</label>
                <input type="text" name="nama" placeholder="" required>

                <label for="fname">Pangkat</label>
                <input type="text" name="pangkat" placeholder="" required>

                <label for="fname">Jabatan</label>
                <input type="text" name="jabatan" placeholder="" required>

                <label for="fname">Ruangan</label>
                <input type="text" name="ruangan" placeholder="" required>

                <label for="fname">Masa Kerja</label>
                <input type="text" name="masakerja" placeholder="" required>
                 
                <label for="fname" >Tanggal Pengangkatan</label>
                <input type="date" name="tgl_pengangkatan" placeholder="" required>
                <br><br>
                <label for="fname">TMT Pangkat Terakhir</label>
                <input type="date" name="tmt_pkt_terakhir" placeholder="" required>
                <br><br>
                <label for="fname">TMT Gaji Terakhir</label>
                <input type="date" name="tmt_gajiterakhir" placeholder="" required>
                <br><br>
                <label for="fname">FOTO</label>
                <input type="file" name="foto" placeholder="" required>

                <input type="submit" name="submit" value="Submit">
    
    </table>
        <div>
            <?php
                include "koneksi.php";

                if(isset($_POST['submit'])){

                	//buat variabel post
                	$nip = $_POST['nip']; 
                	$nama = $_POST['nama'];
                    $pangkat = $_POST['pangkat'];
                    $jabatan = $_POST['jabatan'];
                    $ruangan = $_POST['ruangan'];
                    $masakerja = $_POST['masakerja'];
                    $tgl_pengangkatan = $_POST['tgl_pengangkatan'];
                    $tmt_pkt_terakhir = $_POST['tmt_pkt_terakhir'];
                    $tmt_gajiterakhir = $_POST['tmt_gajiterakhir'];

                    //buat variabel foto
                	$foto = $_FILES['foto']['name'];

                    mysqli_query($koneksi, "insert into pegawai set
                    nip = '$nip',
                    nama = '$nama',
                    pangkat = '$pangkat',
                    jabatan = '$jabatan',
                    ruangan = '$ruangan',
                    masakerja = '$masakerja',
                    tgl_pengangkatan = '$tgl_pengangkatan',
                    tmt_pkt_terakhir = '$tmt_pkt_terakhir',
                    tmt_gajiterakhir = 'tmt_gajiterakhir',
                    foto = '$foto'
                        ");

                    echo "<font color=red size=5>Data Pegawai Berhasil Ditambahkan</font>";
                    echo "<br>";
                    echo "$foto";
                }
            ?>
            <div class="btn">
                <a style="text-decoration:none" href = "table_pegawai.php"> << Kembali Ke Tabel Data </a>
            </div>
        </div>
</body>
</html>