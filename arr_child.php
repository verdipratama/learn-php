<?php

$arr              = ["Januari", "Februari", "Maret"];
$hasil['detail']  = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$hasil2['detail'] = [];

foreach ($arr as $num => $value) {
    $hasil['detail']    = [$num];
    $hasil2['detail'][] = $num;
}

var_dump($arr);
var_dump($hasil);