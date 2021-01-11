<?php
$d1       = strtotime("2016-02-15");
$d2       = strtotime("2016-03-15");
$min_date = min($d1, $d2);
$max_date = max($d1, $d2);
$i        = 1;
while (($min_date = strtotime("+1 MONTH", $min_date)) <= $max_date) {
    $i++;
}
echo $i;

// QUERY MYSQL
// SELECT TIMESTAMPDIFF(MONTH, '2016-11-28', '2016-12-27')
// SOURCE = https: //isnugro.wordpress.com/2016/09/07/menghitung-jumlah-bulan-menggunakan-php/