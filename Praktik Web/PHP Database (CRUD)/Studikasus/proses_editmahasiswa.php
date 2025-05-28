<?php
include 'koneksi.php';

$npm     = $_POST['npm'];
$nama    = $_POST['namaMhs'];
$prodi   = $_POST['prodi'];
$alamat  = $_POST['alamat'];
$noHP    = $_POST['noHP'];

mysqli_query($koneksi, "UPDATE t_mahasiswa SET namaMhs='$nama', prodi='$prodi', alamat='$alamat', noHP='$noHP' WHERE npm=$npm");

header("Location: viewmahasiswa.php");
?>
