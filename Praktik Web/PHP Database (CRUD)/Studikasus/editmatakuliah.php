<?php
include 'koneksi.php';
$kodeMK = $_GET['kodeMK'];
$data = mysqli_query($koneksi, "SELECT * FROM t_matakuliah WHERE kodeMK = $kodeMK");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-400 to-blue-600 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-xl">
    <h2 class="text-3xl font-bold text-blue-700 text-center mb-6">Edit Mata Kuliah</h2>
    <form action="proses_editmatakuliah.php" method="POST" class="space-y-4">
        <input type="hidden" name="kodeMK" value="<?= $row['kodeMK'] ?>">
        <input type="text" name="namaMK" value="<?= $row['namaMK'] ?>" class="w-full px-4 py-2 border rounded-lg">
        <input type="number" name="sks" value="<?= $row['sks'] ?>" class="w-full px-4 py-2 border rounded-lg">
        <input type="number" name="jam" value="<?= $row['jam'] ?>" class="w-full px-4 py-2 border rounded-lg">
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
</div>

</body>
</html>
