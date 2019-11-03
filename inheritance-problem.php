<?php
//jualan produk
//komik
//film
class produk #ini adalah class
{
    public  $judul = "judul",
        $penulis = "penulis",
        $pengarang = "pengarang",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0,
        $tipe = "tipe";

    public function __construct($judul, $penulis, $pengarang, $harga, $jmlHalaman, $waktuMain, $tipe) #penulisan constructor
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->pengarang = $pengarang;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getlebel() #ini penulisan functin
    {
        return "$this->penulis, $this->pengarang";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getlebel()} {$this->harga}";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} jam.";
        }
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


$produk1 = new Produk("Naruto", "Masasikisimoto", "Sonenjump", "Rp. 30000", 100, 0, "Komik"); #setelah menggunakan constructor
$produk2 = new produk("PUBG", "DANIEL LOG", "Barbare", "Rp. 80000", 0, 150, "Game");

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


echo "komik : $produk1->penulis, $produk1->pengarang"; #sebelum menggunakan function
echo "<br>";
echo "Komik : " . $produk1->getlebel();
echo " <br> ";
echo "Game : " . $produk2->getlebel(); #setelah menggunakan functin

echo "<br>";
//penampilan menggunakan object type
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
