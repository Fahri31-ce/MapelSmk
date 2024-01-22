<?php
$nilai = 50;
if ($nilai < 50) {
    $indeks = "E";
} elseif ($nilai < 60) {
    $indeks = "D";
} elseif ($nilai < 75) {
    $indeks = "C";
} elseif ($nilai < 85) {
    $indeks = "B";
} else {
    $indeks = "A";
}
echo "Nilai anda: " . $nilai . ", dikonversi menjadi " . $indeks;
?>
