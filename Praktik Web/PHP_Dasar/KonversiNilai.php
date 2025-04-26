<?php
/*
    Huruf   Nilai
    C   = 0  -> 59
    BC  = 60 -> 69
    B   = 70 -> 79
    AB  = 80 -> 89
    A   = 90 -> 100
*/

// Contoh nilai
$nilai = 85;

// Konversi nilai ke huruf
if ($nilai >= 0 && $nilai <= 59) {
    echo "Nilai huruf: C";
} elseif ($nilai >= 60 && $nilai <= 69) {
    echo "Nilai huruf: BC";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "Nilai huruf: B";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "Nilai huruf: AB";
} elseif ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai huruf: A";
} else {
    echo "Nilai tidak valid.";
}
?>
