<?php
//jualan produk
//komik
//film
class produk #ini adalah class
{
    public $judul = "judul",
        $penulis = "penulis",
        $pengarang = "pengarang",
        $harga = 0;

    public function __construct($judul, $penulis, $pengarang, $harga) #penulisan constructor
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->pengarang = $pengarang;
        $this->harga = $harga;
    }

    public function getlebel() #ini penulisan functin
    {
        return "$this->penulis, $this->pengarang";
    }
}
$produk1 = new Produk("Naruto", "Masasikisimoto", "Sonenjump", "Rp. 30000"); #setelah menggunakan constructor
$produk2 = new produk("PUBG", "DANIEL LOG", "Barbare", "Rp. 80000");

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
