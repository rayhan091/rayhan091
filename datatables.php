<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Datatables</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link href="css/style2.css"  rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    </head>
    <body>

    <h3></h3>

    

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

    <table id= "example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>nip</th>
            <th>nama</th>
            <th>pangkat</th>
            <th>ruangan</th>
            <th>Edit</th>
            <th>Hapus</th>
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
                        <td>$tampil[ruangan]</td>
                        <td>
                        <a href = 'edit.php?id=$tampil[id]'> edit </a>
                        </td>
                        <td>
                        <a href = 'hapus.php?id=$tampil[id]'> hapus </a>
                        </td>
                    </tr>
                    ";
                }
            ?>
    </tbody>
    </table>
        <script>
            $(document).ready(function () {
    $('#example').DataTable();
});
        </script>

<script language="JavaScript" type="text/javascript"> function del(id){ if (confirm("yakin akan menghapus data ini?")){ window.location.href = 'hapus.php?id=' + id; }} </script>
</body>
</html>