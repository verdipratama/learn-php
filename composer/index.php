<?php
    // Memanggil faker
    require 'vendor/fzaninotto/faker/src/autoload.php';

    // Instansiasi
    $faker = faker\Factory::create("id_ID");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Daftar Penduduk 2018</title>
</head>

<body>
  <h1>Data Penduduk 2018</h1>
  <?php for ($i = 0; $i < 10; $i++): ?>
  <ul>
    <li><?php echo $faker->name; ?></li>
    <li><?php echo $faker->address; ?></li>
    <li><?php echo $faker->email; ?></li>
    <li><?php echo $faker->company; ?></li>
  </ul>
  <?php endfor;?>
</body>

</html>