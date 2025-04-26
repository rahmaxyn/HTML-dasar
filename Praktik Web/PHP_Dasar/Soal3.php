<?php
$siswa = [
    ["no" => 1, "poin" => 75, "nama" => "Adi"],
    ["no" => 2, "poin" => 80, "nama" => "Joni"],
    ["no" => 3, "poin" => 65, "nama" => "Jihan"],
    ["no" => 4, "poin" => 70, "nama" => "Aya"],
    ["no" => 5, "poin" => 85, "nama" => "Ita"],
    ["no" => 6, "poin" => 90, "nama" => "Budi"],
    ["no" => 7, "poin" => 95, "nama" => "Tini"],
    ["no" => 8, "poin" => 65, "nama" => "Sari"],
];

foreach ($siswa as $data) {
    if ($data['no'] == 5) {
        echo "Poin siswa nomor urut 5 adalah: " . $data['poin'] . "<br>";
    }
}

echo "Siswa yang memiliki poin 90: <br>";
foreach ($siswa as $data) {
    if ($data['poin'] == 90) {
        echo "- " . $data['nama'] . "<br>";
    }
}

echo "Siswa yang memiliki poin 100: <br>";
$ada = false;
foreach ($siswa as $data) {
    if ($data['poin'] == 100) {
        echo "- " . $data['nama'] . "<br>";
        $ada = true;
    }
}

if (!$ada) {
    echo "Tidak ada siswa yang memiliki poin 100.<br>";
}
?>
