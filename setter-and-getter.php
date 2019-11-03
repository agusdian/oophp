<?php
class produk #ini adalah class
{
    private     $judul = "judul",
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

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getlebel()} {$this->harga}";
        return $str;
    }
}


class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $pengarang, $harga, $jmlHalaman)
    {

        parent::__construct($judul, $penulis, $pengarang, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }
}
class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $pengarang, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $pengarang, $harga,);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

//penambahan object type
class cetakInfoProduk
{
    public function cetak(Produk $Produk)
    {
        $str = "{$Produk->judul} | {$Produk->getlebel()} {$Produk->harga}";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masasikisimoto", "Sonenjump", 30000, 100); #setelah menggunakan constructor
$produk2 = new Game("PUBG", "DANIEL LOG", "Barbare", 80000, 150);

//$produk1 = new produk();   perintah sebelum menggunakan constructor
// $produk1->judul = "Naruto";
// $produk1->penulis = "masasikisimoto";
// $produk1->pengarang = "sonenjump";
// $produk1->harga = "Rp. 30000";

// $produk2 = new produk();
// $produk2->judul = "PUBG";
// $produk2->penulis = "daniel log";
// $produk2->pengarang = "barbare";
// $produk2->harga = "Rp. 80000";


//echo "komik : $produk1->penulis, $produk1->pengarang"; #sebelum menggunakan function
echo "<br>";
echo "Komik : " . $produk1->getlebel();
echo " <br> ";
echo "Game : " . $produk2->getlebel(); #setelah menggunakan functin
echo "<br>";
echo "<br>";
//penampilan menggunakan object type
//$infoProduk1 = new cetakInfoProduk();
//echo $infoProduk1->cetak($produk1);
echo "<br>";
echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
// penampilan menggunakan visibility
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
$produk1->setjudul("judul baru"); #setter 
echo $produk1->getjudul(); #getter
echo "<hr>";
echo $produk2->getpengarang();
