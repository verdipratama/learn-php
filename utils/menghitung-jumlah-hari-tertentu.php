<?php
$periode_awal  = "01-12-2021";
$periode_akhir = "31-12-2021";

// pisahkan tanggal, bulan tahun dari periode_awal
$explodeTgl1 = explode("-", $periode_awal);

// membaca bagian-bagian dari periode_awal
$tgl1 = $explodeTgl1[0];
$bln1 = $explodeTgl1[1];
$thn1 = $explodeTgl1[2];

echo "<p>Hari Minggu pada Periode $periode_awal s/d $periode_akhir Jatuh pada Tanggal-Tanggal Berikut:</p>";

// counter looping
$i = 0;
// counter untuk jumlah hari minggu
$sum = 0;

do {
    // mengenerate tanggal berikutnya
    $tanggal = date("d-m-Y", mktime(0, 0, 0, $bln1, $tgl1 + $i, $thn1));

    // cek jika harinya minggu, maka counter $sum bertambah satu, lalu tampilkan tanggalnya
    if (date("w", mktime(0, 0, 0, $bln1, $tgl1 + $i, $thn1)) == 0) {
        $sum++;
        echo $tanggal . "<br>";
    }

    // increment untuk counter looping
    $i++;
} while ($tanggal != $periode_akhir);
// looping di atas akan terus dilakukan selama tanggal yang digenerate tidak sama dengan periode awal.

// tampilkan jumlah hari Minggu
echo "<p>Jumlah hari minggu antara " . $periode_awal . " s/d " . $periode_akhir . " adalah: " . $sum . "</p>";

// Keterangan:

// if (date("w", mktime(0, 0, 0, $bln1, $tgl1+$i, $thn1)) == 0) -> skrip tercetak tebal akan memulai semuanya menjadi:

// Minggu = 0
// Senin = 1
// Selasa = 2
// Rabu = 3
// Kamis = 4
// Jumat = 5
// Sabtu = 6

// Sehingga dapat dikatakan jika Minggu = 0, maka tambahkan counternya..