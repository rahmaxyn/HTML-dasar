<?php
require_once("kelas/akunBank.php");

$akta1 = new akunBank("001", 1000000);
$akta1->setNama("Anam");

$akta2 = new akunBank("002", 2000000);
$akta2->setNama("Rahma");

$akta1->tambahUang(50000);
$akta2->tarikUang(25000);

echo "Akun: " . $akta1->getNama() . "<br>";
echo "Saldo: Rp " . $akta1->tampilkanSaldo() . "<br>";
echo "Pajak (11%): Rp " . $akta1->hitungPajak() . "<br><br>";

echo "Akun: " . $akta2->getNama() . "<br>";
echo "Saldo: Rp " . $akta2->tampilkanSaldo() . "<br>";
echo "Pajak (11%): Rp " . $akta2->hitungPajak() . "<br>";
