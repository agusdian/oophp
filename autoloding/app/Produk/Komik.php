<?php 
class Komik extends Produk implements infoProduk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $pengarang, $harga, $jmlHalaman)
    {

        parent::__construct($judul, $penulis, $pengarang, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getlebel()} {$this->harga}";
        return $str;
    }
}
