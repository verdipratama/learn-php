<?php
$d1       = strtotime("2021-02-15");
$d2       = strtotime("2021-03-15");
$min_date = min($d1, $d2);
$max_date = max($d1, $d2);
$i        = 1;
while (($min_date = strtotime("+1 MONTH", $min_date)) <= $max_date) {
    $i++;
}
echo $i;

// QUERY MYSQL
// SELECT TIMESTAMPDIFF(MONTH, '2021-11-28', '2021-12-27')
// SOURCE = https: //isnugro.wordpress.com/2021/09/07/menghitung-jumlah-bulan-menggunakan-php/