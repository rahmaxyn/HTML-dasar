<?php
require_once '../class/Dosen.php';
$dosen = new Dosen();

$nama = $_POST['namaDosen'];
$noHP = $_POST['noHP'];

if ($dosen->insert($nama, $noHP)) {
    header("Location: ../view/view_dosen.php");
} else {
    echo "Gagal menyimpan data.";
}
?>
