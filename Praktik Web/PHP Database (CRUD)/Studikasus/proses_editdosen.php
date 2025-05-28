<?php
include 'koneksi.php';

$id = $_POST['idDosen'];
$nama = $_POST['namaDosen'];
$noHP = $_POST['noHP'];

$query = "UPDATE t_dosen SET namaDosen='$nama', noHP='$noHP' WHERE idDosen=$id";
mysqli_query($koneksi, $query);

header("Location: viewdosen.php");
?>
