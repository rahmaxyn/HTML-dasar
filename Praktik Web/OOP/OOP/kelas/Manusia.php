<?php

class Manusia
{
    // Deklarasi Variabel
    protected $name;
    protected $nik = "1234579128746183";
    protected $umur;

    public function setNama($name)
    {
        $this->name = $name;
    }

    public function getNama()
    {
        return $this->name;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function getNIK()
    {
        return $this->nik;
    }
}
