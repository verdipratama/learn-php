<?php
    // jalankan sessionnya terlebih dahulu
    session_start();
    // jika ! tidak ada session login maka?
    if ( !isset($_SESSION["login"]) ) {
        header("Location: login.php"); // kembalikan ke halaman login
        exit;
    }
    
    require 'function.php';

    // ambil data di URL
    $id = $_GET["id"];
    // var_dump($id);

    // query data mahasiswa berdasarkan IDnya 
    // varible $mhs samakan dengan value pada form html
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0]; // [0] adalah array numerik

    if ( isset($_POST["submit"])) {
        // var_dump($_POST);
        
        // cek apakah data berhasil di ubah atau tidak
        if (ubah($_POST) > 0) { // APAKAH FUNCTION UBAH MENGEMBALIKAN LEBIH BESAR DARI 0 ? JIKA YA
            echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
            </script>
            ";
        } else {
            echo "
            <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
            </script>            
            ";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ubah Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
</head>
<body>
    <h1>Ubah Data</h1>
    <!-- enctype adalah tipe encoding untuk menangani file -->
    <form action="" method="post" enctype="multipart/form-data">
    <!-- Membuat identifier yang tidak keliatan oleh user -->
    <input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
    <!-- Ganti gambar lama ke yang baru -->
    <input type="hidden" name="gambarLama" value="<?php echo $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?php echo $mhs["nama"]; ?>"> <!-- require adalah kalo kosong gabisa disubmit -->
            </li>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?php echo $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?php echo $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?php echo $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <br>
                <img src="img/<?php echo $mhs["gambar"]; ?>" width="80">
                <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Ubah data!</button>
            </li>
        </ul>
    </form>
</body>
</html>