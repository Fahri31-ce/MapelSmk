<?php
include ("orang.php");
$dhika = new orang();// instansi
$dhika-> nama = "Dhika Noviansyah";
$dhika->UcapSalam();
echo "<br>";

$shely = new orang(); 
$shely-> nama = "shely sheptiani";
$shely->UcapSalam();

$fahry = new orang(); 
$fahry-> nama = "Muhammad Fahry";
$fahry->UcapSalam();
?>