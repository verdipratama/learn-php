<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
    <style>
        .warna-baris {
            background-color: cyan;
        }
    </style>
</head>
<body>
    <!--- KETERANGAN ENDFOR, ENDIF,ENDELSE, ENDWHILE ENDFOREACH--->
    <table align="center" border ="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 10; $i++) : ?> <!--- : dan endfor;  5 BARIS--->
            <!--- MENAMBAHKAN WARNA--->
            <?php if ( $i % 2 == 1 ) : ?> <!--- BARIS GANJIL 1--->
                <tr class="warna-baris">
            <?php else : ?>
            <tr>
            <?php endif; ?>

                <?php for ($j = 1; $j <= 5; $j++) : ?> <!---MENAMBAHKAN KOLOM--->
                    <td><?php echo "$i, $j";?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>