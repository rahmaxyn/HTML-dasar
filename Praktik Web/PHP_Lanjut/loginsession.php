<?php
session_start();
$error = "";

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            throw new Exception("Input tidak lengkap.");
        }

        $user = $_POST['username'];
        $pass = $_POST['password'];

        if ($user === "rahmayani" && $pass === "123") {
            $_SESSION['login'] = true;
            header("Location: home.php");
            exit;
        } else {
            throw new Exception("Username atau Password salah!");
        }
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
<p style="color:red;"><?php echo $error; ?></p>

