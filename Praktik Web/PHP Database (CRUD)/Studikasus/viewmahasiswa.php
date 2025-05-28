<?php
include 'koneksi.php';
$cari = isset($_GET['cari']) ? $_GET['cari'] : '';
$query = "SELECT * FROM t_mahasiswa";
if (!empty($cari)) {
    $query .= " WHERE namaMhs LIKE '%$cari%'";
}
$data = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 min-h-screen py-10">

<div class="max-w-7xl mx-auto px-4">
    <div class="bg-white p-6 rounded-2xl shadow-lg">
        <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">Daftar Mahasiswa</h1>

        <form action="" method="GET" class="flex justify-end mb-4">
            <input type="text" name="cari" placeholder="Cari nama..." value="<?= htmlspecialchars($cari) ?>"
                class="px-4 py-2 border rounded-l-lg focus:ring-blue-400 w-64">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700">Cari</button>
        </form>

        <div class="text-right mb-4">
            <a href="inputmahasiswa.php" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600">+ Tambah Mahasiswa</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full border">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-6">NPM</th>
                        <th class="py-3 px-6">Nama</th>
                        <th class="py-3 px-6">Prodi</th>
                        <th class="py-3 px-6">Alamat</th>
                        <th class="py-3 px-6">No HP</th>
                        <th class="py-3 px-6">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($data)): ?>
                    <tr class="border-t hover:bg-blue-50">
                        <td class="py-3 px-6"><?= $row['npm'] ?></td>
                        <td class="py-3 px-6"><?= $row['namaMHS'] ?></td>
                        <td class="py-3 px-6"><?= $row['prodi'] ?></td>
                        <td class="py-3 px-6"><?= $row['alamat'] ?></td>
                        <td class="py-3 px-6"><?= $row['noHP'] ?></td>
                        <td class="py-3 px-6 space-x-2">
                            <a href="editmahasiswa.php?npm=<?= $row['npm'] ?>" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</a>
                            <a href="hapusmahasiswa.php?npm=<?= $row['npm'] ?>" onclick="return confirm('Yakin hapus?')" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
