<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Periksa</title>
</head>

<body>
    <?php
        include "koneksi.php";

        $username = $_POST['username'];
        $password = $_POST['password'];

        //membuat query/baca database

        $login = mysqli_query($koneksi, "select *from user where username='$username' and Password='$password'");
        $cek = mysqli_num_rows($login);

        //cek apakah ada user ditemukan pada database
        if($cek> 0){
            $data = mysqli_fetch_assoc($login);

            if($data['level']=="1"){
                
                // session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "1";

                //alihkan ke halaman beranda
                header("location:beranda.html");

            }else if($data['level']=="2"){
                                // session login dan username
                                $_SESSION['username'] = $username;
                                $_SESSION['level'] = "2";
                
                                //alihkan ke halaman beranda
                                header("location:beranda.html");

            }else if($data['level']=="3"){
                // session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "3";

                //alihkan ke halaman beranda
                header("location:boarduser.html");
}
            
        }else {
            //echo "user not found";
            header("location:index.php?pesan=gagal");
        }

    ?>
</body>

</html>