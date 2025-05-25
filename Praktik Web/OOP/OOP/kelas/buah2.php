<?php
class Buah2 {
    public $nama;
    public $warna;
    public $bobot;

    public function set_name($n) {
        $this->nama = $n;
    }

    public function set_color($n) {
        $this->warna = $n;
    }

    public function set_weight($n) {
        $this->bobot = $n;
    }
}

$mango = new Buah2();
$mango->set_name("Anggur");
$mango->set_color("Hijau");
$mango->set_weight("300");

echo "Nama Buah: " . $mango->nama . "<br>";
echo "Warna: " . $mango->warna . "<br>";
echo "Berat: " . $mango->bobot . " gram<br>";
?>
