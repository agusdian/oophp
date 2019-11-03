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

    public function getlebel() #ini penulisan functin
    {
        return "$this->penulis, $this->pengarang";
    }
}
$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "masasikisimoto";
$produk1->pengarang = "sonenjump";
$produk1->harga = "Rp. 30000";
// var_dump($produk1);
$produk2 = new produk();
$produk2->judul = "PUBG";
$produk2->penulis = "daniel log";
$produk2->pengarang = "barbare";
$produk2->harga = "Rp. 80000";


echo "komik : $produk1->penulis, $produk1->pengarang";
echo "<br>";
echo $produk1->getlebel();
echo " <br> ";
echo "Game : " . $produk2->getlebel();
