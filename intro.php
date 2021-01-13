<?php
    // Dasar Sintaks PHP
    // Untuk menampilkan (mencetak) sebuah output
    // Standar output php -> echo, print, print_r, var_dump (mencetak tulisan isi variable)
    // print_r (mencetak string dan array)
    // var_dump (mencetak debug)

    echo "Hello World!";
    echo 123;
    echo true; // BOOLEAN (TRUE,FALSE)

    print "Sama aja!";
    print_r("kapan lagi?");
    var_dump("I LOVE DEBUG");

    // Variabel dan Tipe data
    // tidak boleh diawali dengan angka, tapi boleh mengandung angka!
    $nama = "Ferdi Pratama";

    // Operator Aritmatika
    $x = 1;
    $y = 1;
    echo $x * $y;

    // Penggabungan string / concat
    // . (menggunakan titik)
    $nama_depan    = "Ferdi";
    $nama_belakang = "Pratama";

    echo $nama_depan . " " . $nama_belakang;

    // Operator Assigments (Penugasan)
    // .= , += , -= , /= , %= , *=

    $x = 1;
    $x += 1;

    echo $x;

    $nama = "Ferdi";
    $nama .= "";
    $nama .= "Pratama";

    echo $nama;

    // Operator Perbandingan
    // < (lebih kecil)
    // > (Lebih besar)
    // <= (lebih kecil sama dengan)
    // => (lebih besar sama dengan)
    // == (sama dengan - sama dengan) mengecek sebuah nilai
    // != (mengecek tipe data sama apa tidak)

    var_dump(1 < 5); // satu lebih kecil dari 5
    var_dump(1 == "1"); // tidak mengecek string, hanya mengecek nilai sama apa tdk

    // Identitas
    // === , !=== // untuk mengecek sebuah nilai identitas tipe data
    var_dump(1 === "1");

    // Operator Logika
    // dan , or (kalo 1 benar akan benar)
    // && , || , !
    $x = 10;
    var_dump($x < 20 && $x + 2 == 0) // apakah x lebih kecil dari 20 (true) dan x ditambah 2 sisanya 0 tidak.

    // Penulisan sintaks PHP
    // 1. PHP di dalam HTML
    //2. HTML di dalam PHP
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hello PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="" />
  <script src=""></script>
</head>

<body>
  <h1>Hello <?php echo "<b>WORLD!</b>"; ?></h1>
</body>

</html>