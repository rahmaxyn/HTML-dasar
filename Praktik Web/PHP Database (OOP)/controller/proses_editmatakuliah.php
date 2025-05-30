<?php
require_once '../class/Matakuliah.php';
$mk = new Matakuliah();

$kode = $_POST['kodeMK'];
$nama = $_POST['namaMK'];
$sks  = $_POST['sks'];
$jam  = $_POST['jam'];

if ($mk->update($kode, $nama, $sks, $jam)) {
    header("Location: ../view/view_matakuliah.php");
    exit;
} else {
    echo "❌ Gagal update.";
}
?>
