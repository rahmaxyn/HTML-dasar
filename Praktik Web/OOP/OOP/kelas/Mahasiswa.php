<?php
require_once("Manusia.php");

class Mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        $this->setNama($nama);
    }

    public function setNIM($nim)
    {
        $this->NIM = $nim;
    }

    public function getNIM()
    {
        return $this->NIM;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    public function getKelas()
    {
        return $this->kelas;
    }
}
