<?php

class akunBank
{
    protected $accountNumber;
    protected $jumlahUang;
    protected $nama;

    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jumlahUang = $nominal;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function tambahUang($jumlah)
    {
        $this->jumlahUang += $jumlah;
    }

    public function tarikUang($jumlah)
    {
        if ($jumlah <= $this->jumlahUang) {
            $this->jumlahUang -= $jumlah;
        } else {
            echo "Saldo tidak mencukupi.<br>";
        }
    }

    public function tampilkanSaldo()
    {
        return $this->jumlahUang;
    }

    public function hitungPajak()
    {
        return $this->jumlahUang * 0.11;
    }
}
