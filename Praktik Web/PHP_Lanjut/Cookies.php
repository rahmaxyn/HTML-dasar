<?php
// Jika form disubmit, simpan cookie
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    $username = trim($_POST["username"]);
    
    if (!empty($username)) {
        // Set cookie berlaku 1 hari
        setcookie("username", $username, time() + 86400, "/");
        // Hindari submit ulang saat refresh
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login dengan Cookie</title>
</head>
<body>

<?php
// Cek apakah cookie sudah diset
if (isset($_COOKIE["username"])) {
    echo "<h2>Selamat datang, " . htmlspecialchars($_COOKIE["username"]) . "!</h2>";
    echo "<p><a href='?hapus=true'>Hapus Cookie</a></p>";
} else {
    // Tampilkan form input jika belum ada cookie
    ?>
    <form method="post" action="">
        Masukkan Username: <input type="text" name="username" required>
        <input type="submit" value="Simpan">
    </form>
    <?php
}

// Logika untuk menghapus cookie jika diminta
if (isset($_GET["hapus"])) {
    setcookie("username", "", time() - 3600, "/"); // Hapus cookie
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

</body>
</html>
