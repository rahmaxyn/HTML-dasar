<?php
require_once '../class/Mahasiswa.php';
$mahasiswa = new Mahasiswa();

$npm = $_GET['npm'];
if ($mahasiswa->delete($npm)) {
    header("Location: ../view/view_mahasiswa.php");
} else {
    echo "Gagal menghapus data.";
}
?>
