<?php
abstract class Produk #ini adalah class ber konsep abstrak
{
    protected     $judul = "judul",
        $penulis = "penulis",
        $pengarang = "pengarang",
        $harga = 0,
        $diskon = 0;

    public function __construct($judul, $penulis, $pengarang, $harga) #penulisan constructor
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->pengarang = $pengarang;
        $this->harga = $harga;
    }
    public function setjudul($judul) #setter
    {
        $this->judul = $judul;
    }
    public function getjudul() #getter
    {
        return $this->judul;
    }
    public function setpenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getpenulis()
    {
        return $this->penulis;
    }
    public function setpengarang($pengarang)
    {
        $this->pengarang = $pengarang;
    }
    public function getpengarang()
    {
        return $this->pengarang;
    }
    public function setharga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getlebel() #ini penulisan functin
    {
        return "$this->penulis, $this->pengarang";
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    abstract public function getInfo();
}
