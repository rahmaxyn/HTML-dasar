<?php
$jumlah_uang = 1387500;

$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

foreach($pecahan as $nilai) {
    $banyak = intdiv($jumlah_uang, $nilai);
    $jumlah_uang = $jumlah_uang % $nilai;
    echo "Jumlah pecahan Rp " . number_format($nilai, 0, ',', '.') . " = " . $banyak . " lembar<br>";
}
?>
