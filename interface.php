<?php

interface infoProduk
{
    function getInfoProduk();
}
abstract class produk #ini adalah class ber konsep abstrak
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
class Game extends Produk implements infoProduk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $pengarang, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $pengarang, $harga,);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getlebel()} {$this->harga}";
        return $str;
    }
}

//penambahan object type
class cetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $Produk)
    {
        $this->daftarProduk[] = $Produk;
    }
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br> ";
        }
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masasikisimoto", "Sonenjump", 30000, 100); #setelah menggunakan constructor
$produk2 = new Game("PUBG", "DANIEL LOG", "Barbare", 80000, 150);

$cetakProduk = new cetakInfoProduk(); #pemanggilan konsep abstrak
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
