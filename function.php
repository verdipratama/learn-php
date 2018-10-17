<?php
    // PHP FUNCTION ADALAH POTONGAN PROGRAM PADA BARIS KODE PHP UNTUK MEMPERMUDAH
    // 2 JENIS FUNCTION 
    // - BUILD IN FUNCTION -> FUNGSI DARI PHP
    // - USER DEFINED FUNCTION -> YANG KITA BUAT SENDIRI
    // CONTOH -> DATE/TIME _> TIME() ,  DATE() , MKTIME () , STRTOTIME()

    // Date: untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-y"); // l = hari d = tanggal m = bulan
    echo "<br>";
    echo time(); // unix Timestamp / EPOCH time
    echo "<br>";

    echo date("l", time()+60*60*24*100); // 100 hari dari sekarang hari apa?
    echo "<br>";
    echo date("l", time()-60*60*24*100); // 100 hari kebelakang hari apa?
    echo "<br>";

    // MKTIME : MEMBUAT SENDIRI DETIK
    // MKTIME (0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    
    echo mktime(0,0,0,2,4,1992);
    echo "<br>";
    echo date ("l", mktime(0,0,0,2,4,1992)); // hari ulang tahun
    echo "<br>";
    
    //STR TO TIME (KEBALIKAN DARI MKTIME)
    echo date("l", strtotime("04 feb 1992"));
    echo "<br>";
    // STRING
    // strlen() Untuk menghhitung panjang sebuah string
    // strcmp() untuk menggabungkan sebuah string
    // explode() untuk memecah sebuah string menjadi array
    //htmlspecialchars() 
    
    // UTILITY
    // var_dump() mencetak sebuah variabel string array dll
    // isset() cek apakah sebuah variable udah dibikin apa blm .. bersifat boolean
    // empty() apakah variable ada isinya ada ga?
    // die() memberhentikan program kita
    // sleep() memberhentikan sementara


    // FUNGSI YANG DIBIKIN SENDIRI (USER DEFINED FUNCTION)  
?>
<?php
    function salam($waktu = "Datang", $nama = "Admin!") {
        return "Selamat $waktu, $nama";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contoh function</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
</head>
<body>
    <h1><?php echo salam ("Malam", "Ferdi Pratama!");?></h1>
</body>
</html>