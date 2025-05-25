<?php
require_once("kelas/Mahasiswa.php");

$hns1 = new Mahasiswa("Kunni Sofa Rahmayani");
$hns1->setNIM("244311046");
$hns1->setKelas("TRPL 2B");

echo "DATA MAHASISWA : ". "<br>";
echo "Nama  : " . $hns1->getNama() . "<br>";
echo "NIM   : " . $hns1->getNIM() . "<br>";
echo "Kelas : " . $hns1->getKelas() . "<br>";
