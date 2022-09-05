<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Membuat Surat Otomatis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleboard.css">
</head>

<?php

    $tahun3 = date('Y');
    $tahun2 = $tahun3 - 1;
    $tahun1 = $tahun3 - 2;

?>


<body>
    <div class="container col-lg-5">
    <div class="btn">
                <a style="text-decoration:none" href = "beranda.html"> << Kembali Ke Tabel Data </a>
            </div>
        <div class="card mt-4">
            <form action="prosessurat.php" method="post">
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="">TANGGAL</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">NAMA</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">JABATAN</label>
                        <input type="text" name="jabatan" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">NIP</label>
                        <input type="text" name="nip" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">MASA KERJA</label>
                        <input type="text" name="masa_kerja" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">ALASAN</label>
                        <textarea name="alasan" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group mb-2">
                        <label for="">LAMA CUTI</label>
                        <input type="text" name="lama_cuti" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">MULAI CUTI</label>
                        <input type="date" name="mulai_cuti" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">SAMPAI CUTI</label>
                        <input type="date" name="sampai_cuti" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">TAHUN1</label>
                        <input type="text" name="thn1" class="form-control" value="<?php echo $tahun1; ?>" >
                    </div>

                    <div class="form-group mb-2">
                        <label for="">TAHUN2</label>
                        <input type="text" name="thn2" class="form-control" value="<?php echo $tahun2; ?>" >
                    </div>

                    <div class="form-group mb-2">
                        <label for="">TAHUN3</label>
                        <input type="text" name="thn3" class="form-control" value="<?php echo $tahun3; ?>" >
                    </div>

                    <div class="form-group mb-2">
                        <label for="">SISA1</label>
                        <input type="text" name="sisa1" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">PAKAI1</label>
                        <input type="text" name="pakai1" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">SISA2</label>
                        <input type="text" name="sisa2" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">SISA3</label>
                        <input type="text" name="sisa3" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">NAMA PENYETUJU</label>
                        <input type="text" name="nama_penyetuju" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">NIP PENYETUJU</label>
                        <input type="text" name="nip_penyetuju" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">NAMA KETUA</label>
                        <input type="text" name="nama_ketua" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">NIP KETUA</label>
                        <input type="text" name="nip_ketua" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-success " value="submit" name="submit">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>