<?php
require_once '../class/mahasiswa.php';
$mahasiswa = new Mahasiswa();

$npm = $_GET['npm'];
$data = $mahasiswa->getById($npm);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-xl shadow-md w-full max-w-xl">
    <h2 class="text-3xl font-bold text-blue-700 text-center mb-6">Edit Mahasiswa</h2>
    <form action="../controller/proses_editmahasiswa.php" method="POST" class="space-y-4">
        <input type="hidden" name="npm" value="<?= $data['npm'] ?>">
        <input type="text" name="namaMhs" value="<?= $data['namaMhs'] ?>" class="w-full px-4 py-2 border rounded-lg">
        <input type="text" name="prodi" value="<?= $data['prodi'] ?>" class="w-full px-4 py-2 border rounded-lg">
        <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="w-full px-4 py-2 border rounded-lg">
        <input type="text" name="noHP" value="<?= $data['noHP'] ?>" class="w-full px-4 py-2 border rounded-lg">
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
</div>

</body>
</html>
