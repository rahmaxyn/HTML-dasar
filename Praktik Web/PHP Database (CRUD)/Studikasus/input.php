<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-400 to-blue-600 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
        <h2 class="text-3xl font-bold text-blue-700 text-center mb-6">Form Input Dosen</h2>

        <form action="proses_inputdosen.php" method="POST" class="space-y-5">
            <div>
                <label for="namaDosen" class="block text-gray-700 font-semibold mb-1">Nama Dosen</label>
                <input type="text" id="namaDosen" name="namaDosen" required
                    class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="noHP" class="block text-gray-700 font-semibold mb-1">Nomor HP</label>
                <input type="text" id="noHP" name="noHP" required
                    class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition duration-300">Simpan</button>
            </div>
        </form>
    </div>

</body>
</html>
