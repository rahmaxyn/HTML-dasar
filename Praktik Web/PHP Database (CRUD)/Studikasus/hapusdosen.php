<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM t_dosen WHERE idDosen = $id");

header("Location: viewdosen.php");
?>
