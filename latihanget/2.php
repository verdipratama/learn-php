<?php
    // cek apakah tidak ada data di $_GET
    // isset adalah untuk mengecek variable udah dibikin apa belum
    // tanda !iseet (belum dibikin variable) isset sudah dibikin variable
    // ketika $_GET NAMA BELUM DI SET PAKSA USER BUAT PINDAH
    if (!isset($_GET["merk"]) ||
        !isset($_GET["tahun"]) ||
        !isset($_GET["transmisi"]) ||
        !isset($_GET["body"]) ||
        !isset($_GET["gambar"])
    ) {
        // redirect
        header("Location: 1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Latihan terusan...</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="" />
  <script src=""></script>
</head>

<body>
  <h1>Detail List Mobil Dijual!!!!</h1>
  <ul>
    <img src="img/<?php echo $_GET["gambar"] ?>">
    <li><?php echo $_GET["merk"] ?></li>
    <li><?php echo $_GET["tahun"] ?></li>
    <li><?php echo $_GET["transmisi"] ?></li>
    <li><?php echo $_GET["body"] ?></li>
  </ul>
  <a href="1.php">Kembali ke daftar Mobil</a>
</body>

</html>