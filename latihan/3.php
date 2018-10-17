<?php
    // Menampilkan array dengan cara yang benar tidak menggunakan var_dump() dan print_r
    // karena untuk proses debug

    // Melakukan pengulangan pada Array
    // dengan for / foreach
    // urutan tidak boleh salah!
    // ini adalah array numerik dimana indexnya adalah angka yang dimulai dari 0
    // $mahasiswa = ["Ferdi Pratama","11216050","Teknik Informatika","verdipratama@yahoo.com"];

// array multi dimensi
    $mahasiswa = [
        ["Ferdi Pratama","11216050","Teknik Informatika","verdipratama@yahoo.com"],
        ["Febi Narathama", "11216069","Teknik informatika","febol69@gmail.com"],
        ["Napis", "11216969","Teknik Seksual","napis@gmail.com"]
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
</head>
<body>
    <h1>Daftar Mahasiswa Universitas Serang Raya!</h1>
    <!-- Menggunakan Looping foreach! -->
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?php echo $mhs[0]; ?></li>
        <li>NIM : <?php echo $mhs[1]; ?></li>
        <li>Jurusan : <?php echo $mhs[2]; ?></li>
        <li>Email : <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>