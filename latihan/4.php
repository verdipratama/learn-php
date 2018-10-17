<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: cyan;
            text-align: center;
            line-height: 50px;
            margin: 30px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    // $angka = [1,2,3,4,5,6,7,8,9];
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ]; 
    ?>
    <?php foreach($angka as $a) : ?>
        <?php foreach ($a as $b) :?>
            <div class="kotak"><?php echo $b ?></div>
        <?php endforeach; ?>
            <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>