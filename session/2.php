<?php
// jalankan sessionnya
// setiap kita mau menggunakan nilai di dalam variable $_SESSION harus dijalankan dulu sessionnya
// kita bisa menggunakan nilai dalam sebuah variable asal sudah diset dan halamannya menjalankan session start
// nilai akan hilang pada 1 sesi : exit chrome atau di restart laptopnya
// ke halaman 1 dulu biar di set sessionnya
session_start();
echo $_SESSION["nama"];