<?php
    // jalankan sessionnya terlebih dahulu
    session_start();
    // jika ! tidak ada session login maka?
    if (!isset($_SESSION["login"])) {
        header("Location: login.php"); // kembalikan ke halaman login
        exit;
    }
    // memanggil file function.php wajib letakan di atas query
    require 'function.php';

    // Konfigurasi Membuat Pagination
    $jumlahDataPerhalaman = 2;
    $jumlahData           = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman        = ceil($jumlahData / $jumlahDataPerhalaman);

    if (isset($_GET["halaman"])) {
        $halamanAktif = $_GET["halaman"];
    } else {
        $halamanAktif = 1;
    }

    $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
    // Membuat lIMIT
    // LIMIT adalah batasan 0, 2 Artinya tampilkan 2 data dari index pertama -> 0 index pertama
    // 2 jadikan variable $jumlahDataPerhalaman
    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");

    // pengganti varible jumlahdata atau bisa pakai yang dibawah lebih ribet
    // $result = mysqli_query($db, "SELECT * FROM mahasiswa");
    // $jumlahData = mysqli_num_rows($result); // akan mengembalikan ada berapa baris dari database mahasiswa

    // Membuat variable mahasiswa DAN memangil semua query yand ada di db
    // $mahasiswa = query("SELECT * FROM mahasiswa");

    // MATERI SEACRING -> UNTUK MENGAMBIL DATA YANG BARU ASC / DESC
    // $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

    // jika tombol cari dipencet, ambil apapun yg diketikan oleh user masukan ke function cari
    if (isset($_POST["cari"])) {
        $mahasiswa = cari($_POST["keyword"]); // mendapakan data dari apapun yg diketikan user
    }
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
  <a href="logout.php">LOGOUT!</a>
  <h1>Daftar Mahasiswa</h1>
  <a href="tambah.php">TAMBAH [+]</a>
  <br>
  <br>

  <form action="" method="post">
    <!--autofocus adalah input otomatis aktif || autocolete adalah menghilangkan history -->
    <input type="text" name="keyword" size="35" autofocus placeholder="cari data disini" autocomplete="off">
    <button type="submit" name="cari">CARI!</button>
  </form>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Nama</th>
      <th>nim</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Gambar</th>
    </tr>

    <?php $i = 1;?>
    <?php foreach ($mahasiswa as $mhs): ?>
    <!--Menampilkan data dari tabel mysql menggunakan foreach -->
    <tr>
      <td><?php echo $i; ?></td>
      <td>
        <a href="ubah.php?id=<?php echo $mhs["id"]; ?>">Ubah</a> |
        <a href="hapus.php?id=<?php echo $mhs["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
        <!--saya akan menghapus mhs dari id !! jika return berikan nilai true maka akan mengembalikan  -->
      </td>
      <td><?php echo $mhs["nama"]; ?></td>
      <!--samakan field dengan nama tabel -->
      <td><?php echo $mhs["nim"]; ?></td>
      <td><?php echo $mhs["email"]; ?></td>
      <td><?php echo $mhs["jurusan"]; ?></td>
      <td><img src="img/<?php echo $mhs["gambar"]; ?>" width="50"></td>
    </tr>
    <?php $i++;?>
    <?php endforeach;?>
  </table>
  <br>
  <!-- Prev -->
  <?php if ($halamanAktif > 1): ?>
  <a href="?halaman=<?php echo $halamanAktif - 1; ?>">&laquo;</a>
  <?php endif;?>

  <!-- Membuat Navigasi -->
  <?php for ($i = 1; $i <= $jumlahHalaman; $i++): ?>
  <?php if ($i == $halamanAktif): ?>
  <a href="?halaman=<?php echo $i ?>" style="font-weight: bold; color: red;"><?php echo $i ?></a>
  <?php else: ?>
  <a href="?halaman=<?php echo $i ?>"><?php echo $i ?></a>
  <?php endif;?>
  <?php endfor;?>

  <!-- Next -->
  <?php if ($halamanAktif < $jumlahHalaman): ?>
  <a href="?halaman=<?php echo $halamanAktif + 1; ?>">&raquo;</a>
  <?php endif;?>
</body>

</html>