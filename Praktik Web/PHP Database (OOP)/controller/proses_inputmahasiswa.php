<?php
require_once '../class/mahasiswa.php';
$mahasiswa = new Mahasiswa();

$npm    = $_POST['npm'];
$nama   = $_POST['namaMhs'];
$prodi  = $_POST['prodi'];
$alamat = $_POST['alamat'];
$noHP   = $_POST['noHP'];

if ($mahasiswa->insert($npm, $nama, $prodi, $alamat, $noHP)) {
    header("Location: ../view/view_mahasiswa.php");
} else {
    echo "Gagal menyimpan data mahasiswa.";
}
?>
