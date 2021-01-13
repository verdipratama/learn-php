<?php
// Control flow (struktur kendali PHP)
// Mengatur alur struktur pemrograman PHP
//     1. PENGULANGAN (FOR, WHILE, DO WHILE, FOREACH -> (PENGULANGAN untuk ARRAY SPESIFIK))
//     2. PENGKONDISIAN (IF, ELSE IF, ELSE, TERNARY (OPERATOR UNTUK MENGGANTIKAN SINTAKS ELSE IF), SWITCH)

// FOR PHP
// for ( $i= 0; $i < 10; $i++ ) {
//     echo " Hello, World!<br>";
// }

for ($i = 0; // nilainya 0
    $i < 10; // Apakah 0 lebih kecil dari 50
    $i++) { // harus ada decrement biar tidak looping
    echo "Aku bisa, aku mampu belajar PHP!<br>";
}

// WHILE PHP
// WHILE = selama kondisinya bernilai true lakukan apapun yang ada di dalamnya
$i = 0; // nilainya 0
while ($i < 10) { // apakah 0 lebih kecil dari 10?
    echo "Aku bisa, aku mampu belajar PHP!<br>"; // baru mencetak
    $i++; // harus menggunakan decrement biar tidak looping
}

// DO WHILE
// Mirip while tapi ada sedikit perbedaan (kebalikan dari while)
$i = 0; // nilainya 0
do { // lakukan hal ini selama kondisi bernilai true
    echo "Aku bisa, aku mampu belajar PHP!<br>";
    $i++; // harus menggunakan decrement biar tidak looping
} while ($i < 10); // apakah 0 lebih kecil dari 10?

// PENGKONDSIAN / PERCABANGAN
// IF ELSE
// IF ELSE IF ELSE
// TERNARY
// SWITCH

// IF PHP
$x = 0; // nilainya 0
if ($x < 20) { // Apakah x lebih kecil dari 20?
    echo "BENAR<br>";
}

// IF ELSE
$x = 20; // nilainya 20
if ($x < 20) { // Apakah 20 lebih kecil dari 20?
    echo "BENAR";
} else {
    echo "SALAH<br>";
    // hasilnya SALAH!
}

// ELSEIF
$x = 20;
if ($x < 20) { // Apakah 20 lebih kecil dari 20?
    echo "BENAR";
} elseif ($x == 20) { // KLO PAS DI 20
    echo "BINGO!";
    echo "<br>";
} else {
    echo "SALAH";
}

// tugas Mencari nilai mahasiswa

$nilai = 100;
if ($nilai >= 80 && $nilai <= 100) {
    echo "A";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "B";
} elseif ($nilai >= 55 && $nilai <= 69) {
    echo "C";
} elseif ($nilai >= 35 && $nilai <= 54) {
    echo "D";
} elseif ($nilai < 35) {
    echo "E";
} else {
    echo "Kelebihan Nilai";
}