<?php
    $str = "Pada hari kamis tanggal 21 Januari 2021";
    if (preg_match_all("/\d{1,2} \w+ \d{4}/", $str, $match)) {
        print_r($match);
    } else {
        echo "not matched";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STRING TO DATE</title>
</head>

<body>
</body>

</html>