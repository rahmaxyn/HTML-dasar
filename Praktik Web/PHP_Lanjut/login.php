<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Login</title>
    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
<?php
$username = $password = "";
$userErr = $passErr = "";
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $userErr = "Masukkan username";
    } else {
        $username = bersihkan_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passErr = "Masukkan password";
    } else {
        $password = bersihkan_input($_POST["password"]);
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="username">
    <span class="error">* <?php echo $userErr;?></span><br><br>

    Password: <input type="password" name="password">
    <span class="error">* <?php echo $passErr;?></span><br><br>

    <input type="submit" value="Login">
</form>
</body>
</html>
