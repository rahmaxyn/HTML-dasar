<?php

$jari_jari = 15;
$keliling = 2 * pi() * $jari_jari;

$keliling_format = number_format($keliling, 2);

echo "Keliling lingkaran dengan jari-jari $jari_jari cm adalah: $keliling_format cm.";
?>
