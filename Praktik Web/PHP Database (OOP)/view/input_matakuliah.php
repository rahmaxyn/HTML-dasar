<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 min-h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded-xl shadow-md w-full max-w-xl">
    <h2 class="text-3xl font-bold text-blue-700 text-center mb-6">Form Input Mata Kuliah</h2>
    <form action="../controller/proses_inputmatakuliah.php" method="POST" class="space-y-4">
        <input type="number" name="kodeMK" placeholder="Kode MK" required class="w-full px-4 py-2 border rounded-lg">
        <input type="text" name="namaMK" placeholder="Nama Mata Kuliah" required class="w-full px-4 py-2 border rounded-lg">
        <input type="number" name="sks" placeholder="SKS" required class="w-full px-4 py-2 border rounded-lg">
        <input type="number" name="jam" placeholder="Jam" required class="w-full px-4 py-2 border rounded-lg">
        <div class="text-center">
            <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
</div>
</body>
</html>
