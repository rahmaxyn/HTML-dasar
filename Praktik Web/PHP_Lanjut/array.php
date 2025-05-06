<?php
$data = [
    ["nama" => "Dian", "umur" => 21],
    ["nama" => "Majid", "umur" => 23],
    ["nama" => "Rahma", "umur" => 19],
    ["nama" => "Kunni", "umur" => 18],
    ["nama" => "Roni", "umur" => 24],
    ["nama" => "Fajar", "umur" => 20],
    ["nama" => "Gita", "umur" => 21],
    ["nama" => "Hana", "umur" => 25],
    ["nama" => "Candi", "umur" => 12],
    ["nama" => "Mudasir", "umur" => 23],
    ["nama" => "Kiki", "umur" => 22],
    ["nama" => "Lina", "umur" => 20],
    ["nama" => "Maya", "umur" => 21],
    ["nama" => "Nina", "umur" => 24],
    ["nama" => "Oscar", "umur" => 19],
];

$jsonData = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$jsonData</pre>";
?>
