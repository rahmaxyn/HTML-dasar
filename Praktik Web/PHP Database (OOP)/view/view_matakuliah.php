<?php
require_once '../class/Matakuliah.php';
$mk = new Matakuliah();
$cari = $_GET['cari'] ?? '';
$data = $mk->getAll($cari);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Matakuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 p-10">
<div class="max-w-6xl mx-auto bg-white p-6 rounded-xl shadow">
    <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">Data Matakuliah</h1>
    <form class="mb-4 flex justify-end" method="GET">
        <input type="text" name="cari" value="<?= htmlspecialchars($cari) ?>" placeholder="Cari matakuliah..." class="border rounded-l px-4 py-2">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-r hover:bg-blue-700">Cari</button>
    </form>
    <div class="text-right mb-3">
        <a href="input_matakuliah.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">+ Tambah</a>
    </div>
    <table class="min-w-full border border-gray-200">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="py-2 px-4">Kode</th>
                <th class="py-2 px-4">Nama</th>
                <th class="py-2 px-4">SKS</th>
                <th class="py-2 px-4">Jam</th>
                <th class="py-2 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $data->fetch_assoc()): ?>
            <tr class="border-t hover:bg-blue-50">
                <td class="px-4 py-2"><?= $row['kodeMK'] ?></td>
                <td class="px-4 py-2"><?= $row['namaMK'] ?></td>
                <td class="px-4 py-2"><?= $row['sks'] ?></td>
                <td class="px-4 py-2"><?= $row['jam'] ?></td>
                <td class="px-4 py-2 space-x-2">
                    <a href="editMatakuliah.php?kodeMK=<?= $row['kodeMK'] ?>" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</a>
                    <a href="../controller/hapusMatakuliah.php?kodeMK=<?= $row['kodeMK'] ?>" onclick="return confirm('Yakin?')" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</a>
                </td>
            </tr>
        <?php endwhile ?>
        </tbody>
    </table>
</div>
</body>
</html>
