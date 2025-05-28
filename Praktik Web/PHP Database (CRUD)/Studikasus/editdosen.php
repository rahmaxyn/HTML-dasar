<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM t_dosen WHERE idDosen = $id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-400 to-blue-600 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
        <h2 class="text-3xl font-bold text-blue-700 text-center mb-6">Edit Data Dosen</h2>

        <form action="proses_editdosen.php" method="POST" class="space-y-5">
            <input type="hidden" name="idDosen" value="<?= $row['idDosen'] ?>">

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Nama Dosen</label>
                <input type="text" name="namaDosen" value="<?= $row['namaDosen'] ?>" required
                    class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Nomor HP</label>
                <input type="text" name="noHP" value="<?= $row['noHP'] ?>" required
                    class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Update</button>
            </div>
        </form>
    </div>

</body>
</html>