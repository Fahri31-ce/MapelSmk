<?php
session_start

if (isset($_SESSION['login'])) { //jika sudah login
echo "<hi selamat Datang ". $_SESSION['login']."</h1>";
echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah Login</h2>";
echo "<h2>klik <a href='session03.php'>di sini (session03.php)</a> untuk LOGOUT</h2>";
} else {

    //session belum ada artinya belum login
die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.silahkan login <a href='session01.php'>di sini</a>");
}
?>