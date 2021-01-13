<?php
// Superglobal
// variable yang dibuat di dalam function hanya berlaku di dalam function itu sendiri
// variable local dan global
// variable superglobal adalah variable yang dimiliki php merupakan array assosiatif
// contoh variable: $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV (TIPENYA ADALAH ARRAY ASSOSIATIF)
// echo $_SERVER["SCRIPT_FILENAME"];
// key dan value
// ? adalah saya akan mengirimkan data data di halaman ini metode get
// GET DIKIRIM LEWAT URL
// POST DIKIRM LEWAT FORM

$x = 10; // variable local untuk satu halaman

function tampilX()
{
    $x = 20; // variable local untuk functionnya saja
    echo $x;
}

function tampilXX()
{
    global $x; // variable global untuk satu halaman
    echo $x;
}

tampilX();
tampilXX();
echo "<br>";
echo $x;
echo "<br>";

// Superglobal yang dimilik PHP!
echo $_SERVER["SERVER_NAME"];
echo "<br>";

// $_GET
$_GET["nama"] = "Ferdi Pratama";
$_GET["nim"]  = 11216050;
var_dump($_GET);

// cara menambahkan string di url get =>
// contohnya?nama=Ferdi Pratama&nim=11216050
// nulisnya key dan value pisahkan dengan samadengan