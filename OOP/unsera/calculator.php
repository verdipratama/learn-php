<?php
class kalkulator
{
    public function tambah($a, $b)
    {
        $hasil = $a + $b;
        return $hasil;
    }
}

$cal   = new kalkulator;
$hasil = $cal->tambah(5, 10) * 5;
echo $hasil;