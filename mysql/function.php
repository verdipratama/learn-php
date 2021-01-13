<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "yt");

function query($query)
{
    global $db; // menggunakan variable scope yg ada didalem function berbeda dengan variable yg diluar
    $result = mysqli_query($db, $query);
    $rows   = []; // array assosiatif kotak kosong
    while ($mhs = mysqli_fetch_assoc($result)) {
        $rows[] = $mhs; // menambahkan element baru diakhir tiap array
    }
    return $rows; // harus dikembalikan kotaknya
}