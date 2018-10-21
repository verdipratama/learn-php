<?php 
    // memanggil file function.php
    require 'function.php';
    // ketika tombol registrasi dipencet maka?
    if ( isset($_POST["register"])) {
        // cek apakah registrasi berhasil
        if (registrasi($_POST) > 0) { // APAKAH FUNCTION Registrasi MENGEMBALIKAN LEBIH BESAR DARI 0 ?
            echo "
            <script>
            alert('user baru berhasil ditambahkan!');
            </script>
            ";
        } else {
            echo mysqli_error($db);
        }
    }
    // cek apakah tombol submit sudah ditekan apa belum
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // jika benar, tampilkan ke halaman admin
        header("Location: login.php");
        exit;       
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">                
            </li>
            <li>
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2">                
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
        </ul>
    </form>
</body>
</html>