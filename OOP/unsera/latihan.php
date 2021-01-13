<?php
class ikan
{
    public function berenang()
    {
        echo "FERDI DAPAT BERENANG";
    }
    public function nama_ikan($ikan)
    {
        echo $ikan;
    }
}

class kerapu extends ikan
{
    public function nama_ikan()
    {
        $ikan = "Bigo";
        return $ikan;
    }
}

$ikan   = new ikan();
$kerapu = new kerapu();
$kerapu->berenang();
$kerapu->nama_ikan();