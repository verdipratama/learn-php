<?php

$harga_awal          = 180974;
$harga_pembulatan    = round($harga_awal, -3); //181000
$harga_bulat_keatas  = ceil($harga_awal / 1000) * 1000; //181000
$harga_bulat_kebawah = floor($harga_awal / 1000) * 1000; // 180000
echo "<br>";