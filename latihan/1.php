<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
</head>
<body>
    <!--- KETERANGAN ENDFOR, ENDIF,ENDELSE, ENDWHILE ENDFOREACH--->
    <table align="center" border ="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 10; $i++) : ?> <!--- : dan endfor; I = BARIS--->
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?> <!--- J = KOLOM--->
                    <td><?php echo "$i, $j";?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>