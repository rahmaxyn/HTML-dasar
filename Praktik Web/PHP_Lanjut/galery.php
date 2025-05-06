<!DOCTYPE html>
<html>
<head>
    <title>Galeri Gambar</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .gallery img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>Galeri Gambar</h2>
<div class="gallery">
<?php
$fileList = glob('gambar/*.*'); 

foreach ($fileList as $filename) {
    if (is_file($filename)) {
        echo "<img src='$filename' alt='gambar'>";
    }
}
?>
</div>

</body>
</html>
