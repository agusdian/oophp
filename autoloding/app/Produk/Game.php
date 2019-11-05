<?php 
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
