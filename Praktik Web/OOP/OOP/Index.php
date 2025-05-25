<?php
require_once("kelas/Manusia.php");

$andi = new Manusia();
$andi->setNama("Andi Pratama");

$budi = new Manusia();
$budi->setNama("Budi Santoso");

$saya = new Manusia();
$saya->setNama("Kunni Sofa Rahmayani");
$saya->setUmur(18);

echo ($andi->getNama() . "<br>");
echo "Nama Lengkap: " . $budi->getNama() . "<br>";

echo "Nama: " . $saya->getNama() . "<br>";
echo "Umur: " . $saya->getUmur() . "<br>";
echo "NIK: " . $saya->getNIK() . "<br><br>";

echo "<b>Kesimpulan:</b><br>";
echo "Dari ujicoba ini, saya telah berhasil membuat objek dari kelas Manusia, 
mengatur dan mengambil nilai nama, umur, serta menampilkan NIK menggunakan fungsi getter dan setter.";
