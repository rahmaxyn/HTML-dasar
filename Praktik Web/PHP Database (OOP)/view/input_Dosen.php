<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Form Input Dosen</h2>
        <form action="../controller/proses_inputdosen.php" method="POST" class="space-y-4">
            <input type="text" name="namaDosen" placeholder="Nama Dosen" required class="w-full px-4 py-2 border rounded-lg">
            <input type="text" name="noHP" placeholder="Nomor HP" required class="w-full px-4 py-2 border rounded-lg">
            <div class="text-center">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
