<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABEL PEGAWAI</title>
</head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<link href="css/style2.css"  rel="stylesheet">

<style>
    div.dataTables_wrapper {
        width: 75%;
        margin: 0 auto;
        padding-top: 45px;
    }
</style>

<body>

    <div class="container">
        <div>
            <center>
                 <h3>DATA PEGAWAI</h3>
            </center>
        </div>

        <div class="btn-header" style="display: flex;">
            <div class="btn1">
            
            <a href="boarduser.html" class="btn" style="background-color: #e74c3c;color:white;"> << Kembali</a>
            </div>
            <div class="btn2">
            <a href="input.php" class="btn" style="background-color: #33de6c;color:white;"> Tambah data >> </a>
            </div>
        </div>

    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>NIP</th>
                <th>NAMA</th>
                <th>PANGKAT</th>
                <th>JABATAN</th>
                <th>RUANGAN</th>
                <th>MASA KERJA</th>
                <th>TANGGAL PENGANGKATAN</th>
                <th>TMT PANGKAT TERAKHIR</th>
                <th>TMT GAJI TERAKHIR</th>
                <th>FOTO</th>
                <th>action</th>
            </tr>
        </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $ambildata = mysqli_query($koneksi, "select * from pegawai");
                while ($tampil = mysqli_fetch_array($ambildata)){
                    echo "
                <tr>
                    <td>$tampil[nip]</td>
                    <td>$tampil[nama]</td>
                    <td>$tampil[pangkat]</td>
                    <td>$tampil[jabatan]</td>
                    <td>$tampil[ruangan]</td>
                    <td>$tampil[masakerja]</td>
                    <td>$tampil[tgl_pengangkatan]</td>
                    <td>$tampil[tmt_pkt_terakhir]</td>
                    <td>$tampil[tmt_gajiterakhir]</td>
                    <td>$tampil[foto]</td>
                    <td>
                    <a href = 'edit.php?id=$tampil[id]'> edit </a>
                    <a href = 'hapus.php?id=$tampil[id]'> hapus </a>
                    </td>
                </tr>
                ";
                }
                ?>
            </tbody>
    </table>

                <script>
                     $(document).ready(function() {
                        $('#example').DataTable({
                            scrollX: true,
                         });
                    });
                </script>
</body>
</html>