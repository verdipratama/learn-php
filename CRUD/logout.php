<?php
    session_start();
    // Menghapus sessionnya dengan destroy dan unset => biar bener2 dihapus pake unset
    $_SESSION = [];
    session_unset();
    session_destroy();
    // Menghapus Cookienya
    // set dengan nama yang sama tapi valuenya kosong serta datenya dengan waktu yg sudah lewat
    setcookie('id', '', time() - 3600);
    setcookie('key','', time() - 3600);

    header("Location: login.php");
    exit;
?>