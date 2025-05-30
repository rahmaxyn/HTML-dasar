<?php
require_once '../class/Dosen.php';
$dosen = new Dosen();

$id = $_GET['id'];
if ($dosen->delete($id)) {
    header("Location: ../view/view_dosen.php");
} else {
    echo "Gagal menghapus data.";
}
?>
