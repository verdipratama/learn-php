<?php
    // ARRAY PHP
    // array adalah sebuah variable yang dapat memiliki banyak nilai
    // element pada array boleh memilik tipe data yg berbeda
    // pasangan key dan value
    // key-nya adalah index yang dimulai DARI O
    // ini adalah array numerik dimana indexnya adalah angka yang dimulai dari 0
    // membuat array cara lama dan baru
    // cara lama & cara baru
    $hari = array("Senin", "Selasa", "Rabu");

    // cara baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1  = [123, "tulisan", false];

    //Menampilkan Array ke layar tidak bisa echo & print
    // VAR_DUMP() / PRINT_R
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";

    // Menampilkan 1 element pada Array
    echo $arr1[0];
    echo "<br>";
    echo $bulan[1];
    echo "<br>";

    // Menambahkan element baru pada Array
    var_dump($hari);
    $hari[] = "Kamis"; // cara menambahkan array dengan string
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);
    echo "<br>";

    // INI ADALAH ARRAY MULTIDEMENSIONAL
    $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    echo $angka[1][0]; // yang keluar pasti 4
    echo "<br>";

    // Menampilkan array dengan cara yang benar tidak menggunakan var_dump() dan print_r
    // karena untuk proses debug

    // Melakukan pengulangan pada Array
    // dengan for / foreach
    // urutan tidak boleh salah
    // ini adalah array numerik

    $mahasiswa = ["Ferdi Pratama", "11216050", "Teknik Informatika", "verdipratama@yahoo.com"];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contoh Array</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="" />
  <script src=""></script>
</head>

<body>

  <body>
    <h1>Daftar Mahasiswa Universitas Serang Raya!</h1>
    <!-- Menggunakan Looping foreach! untuk mengulang data mahasiswa-->
    <?php foreach ($mahasiswa as $mhs): ?>
    <li><?php echo $mhs ?></li>
    <?php endforeach;?>
  </body>
</body>

</html>