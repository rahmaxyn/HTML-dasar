<?php
// File: latihanVariabel.php

// Menyimpan nama-nama hari dalam array
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

// Menampilkan nama-nama hari satu per satu
echo "<h3>Daftar Nama Hari:</h3>";
foreach ($hari as $namaHari) {
    echo $namaHari . "<br>";
}
?>
