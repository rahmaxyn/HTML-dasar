<?php
require_once '../class/Matakuliah.php';
$mk = new Matakuliah();

$kode = $_GET['kodeMK'];
$data = $mk->getById($kode);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-400 to-blue-600 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-xl">
    <h2 class="text-3xl font-bold text-blue-700 text-center mb-6">Edit Mata Kuliah</h2>
    <form action="../controller/proses_editmatakuliah.php" method="POST" class="space-y-4">
        <input type="hidden" name="kodeMK" value="<?= $data['kodeMK'] ?>">
        <input type="text" name="namaMK" value="<?= $data['namaMK'] ?>" required class="w-full px-4 py-2 border rounded-lg">
        <input type="number" name="sks" value="<?= $data['sks'] ?>" required class="w-full px-4 py-2 border rounded-lg">
        <input type="number" name="jam" value="<?= $data['jam'] ?>" required class="w-full px-4 py-2 border rounded-lg">
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
</div>

</body>
</html>