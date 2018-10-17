<?php
    // koneksi ke database
    $db = mysqli_connect("localhost", "root","", "yt");

    // Ambil data dari tabel mahasiswa / query data mahasiswa
    $result = mysqli_query($db, "SELECT * FROM mahasiswa");
    if(!$result) { // kalo misalkan !not result - false error
        echo mysqli_error($db);
    }
    // Ambil data (fetch) dari object result
    // ada 4 cara

    // mysqli_fetch_row() = mengembalikan array numerik
    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs[1]);

    // mysqli_fetch_assoc() = mengembalikan array assosiatif
    // while ($mhs = mysqli_fetch_assoc($result)) { // looping semua yg ada di db menggunakan while
    // var_dump($mhs);
    // }

    // mysqli_fetch_array() = mengambilkan keduanya lebih fleksibel, tapi kekurangangnya ada 22nya
    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs);

    // mysqli_fetch_object() = mengembalikan object pake ->
    // $mhs = mysqli_fetch_object($result);
    // var_dump($mhs->email);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($baris = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?php echo $baris["gambar"]; ?>" width="50"></td>
            <td><?php echo $baris["nama"]; ?></td> <!--samakan field dengan nama tabel -->
            <td><?php echo $baris["nim"]; ?></td>
            <td><?php echo $baris["email"]; ?></td>
            <td><?php echo $baris["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>