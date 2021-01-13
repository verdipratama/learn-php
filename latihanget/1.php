<?php
    // Superglobal
    // variable yang dibuat di dalam function hanya berlaku di dalam function itu sendiri
    // variable local dan global
    // variable superglobal adalah variable yang dimiliki php merupakan array assosiatif
    // contoh variable: $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV (TIPENYA ADALAH ARRAY ASSOSIATIF)
    // echo $_SERVER["SCRIPT_FILENAME"];
    // key dan value
    // ? adalah saya akan mengirimkan data data di halaman ini metode get

    $cars = [
        [
            "merk"      => "BMW",
            "tahun"     => "2018",
            "transmisi" => "Automatic",
            "body"      => "Sedan",
            "gambar"    => "1.png",
        ],
        [
            "merk"      => "Mercy",
            "tahun"     => "2012",
            "transmisi" => "Manual",
            "body"      => "SUV",
            "gambar"    => "2.png",
        ],
        [
            "merk"      => "Audi",
            "tahun"     => "2016",
            "transmisi" => "Automatic",
            "body"      => "Sedan",
            "gambar"    => "3.jpeg",
        ],
        [
            "merk"      => "Toyota",
            "tahun"     => "2010",
            "transmisi" => "Manual",
            "body"      => "SUV",
            "gambar"    => "4.jpg",
        ],
    ];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tugas 5 Array</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="" />
  <script src=""></script>
</head>

<body>
  <h1>List Mobil Dijual 2018</h1>
  <ul>
    <?php foreach ($cars as $c): ?>
    <li>
      <!--- AWAS SPASI MEMPENGARUHI URL GET -->
      <a href="2.php?merk=<?php echo $c["merk"] ?>
                    &tahun=<?php echo $c["tahun"] ?>
                    &transmisi=<?php echo $c["transmisi"] ?>
                    &body=<?php echo $c["body"] ?>
                    &gambar=<?php echo $c["gambar"] ?>"><?php echo $c["merk"] ?></a>
    </li>
    <?php endforeach;?>
  </ul>
</body>

</html>