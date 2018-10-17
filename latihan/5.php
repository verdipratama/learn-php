<?php
    $cars = [
        [
            "merk" => "BMW",
            "tahun" => "2018",
            "transmisi" => "Automatic",
            "body" => "Sedan",
            "gambar" => "1.png"
        ],
        [
            "merk" => "Mercy",
            "tahun" => "2012",
            "transmisi" => "Manual",
            "body" => "SUV",
            "gambar" => "2.png"
        ],
        [
            "merk" => "Audi",
            "tahun" => "2016",
            "transmisi" => "Automatic",
            "body" => "Sedan",
            "gambar" => "3.jpeg"
        ],
        [
            "merk" => "Toyota",
            "tahun" => "2010",
            "transmisi" => "Manual",
            "body" => "SUV",
            "gambar" => "4.jpg"
        ]    
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
    <?php foreach ($cars as $c):?>
        <ul>
            <img src="img/<?php echo $c ["gambar"]?>">
            <li>Merk : <?php echo $c ["merk"]?></li>
            <li>Tahun : <?php echo $c ["tahun"]?></li>
            <li>Transmisi : <?php echo $c ["transmisi"]?></li>
            <li>Body : <?php echo $c ["body"]?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>