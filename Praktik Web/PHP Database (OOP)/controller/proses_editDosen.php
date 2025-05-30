<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once '../class/Dosen.php';
$dosen = new Dosen();

$id = $_POST['idDosen'];
$nama = $_POST['namaDosen'];
$noHP = $_POST['noHP'];

if ($dosen->update($id, $nama, $noHP)) {
    header("Location: ../view/view_dosen.php");
    exit;
} else {
    echo "Gagal mengupdate data.";
}
?>
