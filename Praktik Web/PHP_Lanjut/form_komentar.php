<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="name"><br>
    E-mail: <input type="email" name="email"><br>
    Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
    <input type="submit" value="Simpan">
    <input type="reset" value="Bersihkan">
</form>

<?php
$name = $email = $comment = "";

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = bersihkan_input($_POST["name"]);
    $email = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);

    echo "<hr>";
    echo "Nama: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Komentar: " . $comment . "<br>";
    echo "<hr>";
}
?>
</body>
</html>
