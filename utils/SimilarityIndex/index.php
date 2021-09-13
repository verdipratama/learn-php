<?php
/*
kode ini dibuat dan ditulis oleh
Ferdi Pratama Wichaksono.
 */

$string1 = "Babc8792de";
$string2 = "abcadade";
$string3 = "babacdeadabc";

$array_string = [
    "aku suka kamu",
    "kamu suka aku",
    "siapa kamu",
    "gimana kamu",
];

$splitted = [];
foreach ($array_string as $string) {
    $string_split = str_split($string);
    $splitted[]   = $string_split;
}

$sprinted = [];
foreach ($splitted as $key => $val) {
    foreach ($val as $key2 => $val2) {
        $sprinted[] = $val2;
    }
}

$count_arr  = count($array_string);
$out        = array_count_values($sprinted);
$kata_akhir = [];
foreach ($out as $key => $val) {
    if ($val >= $count_arr) {
        $kata_akhir[] = $key;
    } else {
        $kata_akhir[] = '-';
    }
}

$kata_akhir_string = implode('', $kata_akhir);
$kata_akhir_diolah = str_replace('-', ' ', $kata_akhir_string);
$kata_akhir_diolah = explode(' ', $kata_akhir_diolah);
$kata_akhir_diolah = array_filter($kata_akhir_diolah);

$kata_final = [];

foreach ($kata_akhir_diolah as $key => $val) {
    $kata_final[] = $val;
}

echo 'list:' . "\n";
echo '<pre>' . "\n";
print_r($array_string);
echo "\n" . 'hasil:' . "\n";
print_r($kata_final);
echo "\n";