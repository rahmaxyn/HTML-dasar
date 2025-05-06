<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
</head>
<body>
    <?php
        echo "Selamat datang " . $_POST['nama'] . "!<br>";
        echo "Nim: " . $_POST['nim'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
        echo "Tempat, Tanggal Lahir: " . $_POST['tempat'] . ", " . $_POST['ttl'] . "<br>";
        echo "Alamat: " . $_POST['alamat'] . "<br>";
        echo "Jenis Kelamin: " . $_POST['gender'] . "<br>";
    ?>
</body>
</html>