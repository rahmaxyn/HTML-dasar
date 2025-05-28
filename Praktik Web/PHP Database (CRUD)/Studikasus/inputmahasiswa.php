<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-400 to-blue-600 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-xl">
        <h2 class="text-3xl font-bold text-blue-700 text-center mb-6">Form Input Mahasiswa</h2>
        <form action="proses_inputmahasiswa.php" method="POST" class="space-y-4">
            <input type="number" name="npm" placeholder="NPM" required class="w-full px-4 py-2 border rounded-lg">
            <input type="text" name="namaMhs" placeholder="Nama Mahasiswa" required class="w-full px-4 py-2 border rounded-lg">
            <input type="text" name="prodi" placeholder="Program Studi" required class="w-full px-4 py-2 border rounded-lg">
            <input type="text" name="alamat" placeholder="Alamat" required class="w-full px-4 py-2 border rounded-lg">
            <input type="text" name="noHP" placeholder="Nomor HP" required class="w-full px-4 py-2 border rounded-lg">
            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Simpan</button>
            </div>
        </form>
    </div>

</body>
</html>
