<?php
require_once '../class/Matakuliah.php';
$mk = new Matakuliah();

$kode = $_GET['kodeMK'];
if ($mk->delete($kode)) {
    header("Location: ../view/view_matakuliah.php");
} else {
    echo "Gagal menghapus data.";
}
?>
