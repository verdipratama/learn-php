<?php
// DO WHILE
// Mirip while tapi ada sedikit perbedaan (kebalikan dari while)
$i = 0; // nilainya 0
do { // lakukan hal ini selama kondisi bernilai true
    echo "Aku bisa, aku mampu belajar PHP!<br>";
    $i++; // harus menggunakan decrement biar tidak looping
} while ($i < 10); // apakah 0 lebih kecil dari 10?