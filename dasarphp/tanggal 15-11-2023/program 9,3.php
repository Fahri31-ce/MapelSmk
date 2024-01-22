<?php
session_start();
if (isset($_SESSION['login'])) {
    unset ($_SESSION);
    session_destroy();

    echo "<h1>Anda sudah berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='program 9,1.php'>di sini</a> untuk LOGIN kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman</h2>";
}
?>