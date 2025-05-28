<?php
include 'koneksi.php';

$cari = isset($_GET['cari']) ? $_GET['cari'] : '';

$query = "SELECT * FROM t_dosen";
if (!empty($cari)) {
    $query .= " WHERE namaDosen LIKE '%$cari%'";
}
$data = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 min-h-screen py-10">

    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white p-6 rounded-2xl shadow-lg">
            <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">Daftar Dosen</h1>

            <!-- Form Pencarian -->
            <form action="" method="GET" class="flex justify-end mb-4">
                <input type="text" name="cari" placeholder="Cari nama dosen..." value="<?= htmlspecialchars($cari) ?>"
                    class="px-4 py-2 border border-blue-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-64">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700 transition">Cari</button>
            </form>

            <div class="text-right mb-4">
                <a href="input.php" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 transition">+ Tambah Dosen</a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">ID</th>
                            <th class="py-3 px-6 text-left">Nama Dosen</th>
                            <th class="py-3 px-6 text-left">No HP</th>
                            <th class="py-3 px-6 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($data) > 0): ?>
                            <?php while($row = mysqli_fetch_assoc($data)): ?>
                            <tr class="border-t hover:bg-blue-50">
                                <td class="py-3 px-6"><?= $row['idDosen']; ?></td>
                                <td class="py-3 px-6"><?= $row['namaDosen']; ?></td>
                                <td class="py-3 px-6"><?= $row['noHP']; ?></td>
                                <td class="py-3 px-6 space-x-2">
                                    <a href="editdosen.php?id=<?= $row['idDosen']; ?>" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</a>
                                    <a href="hapusdosen.php?id=<?= $row['idDosen']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center text-gray-500 py-4">Data tidak ditemukan.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
