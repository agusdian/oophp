<?php
require_once 'app/init.php';

$produk1 = new Komik("Naruto", "Masasikisimoto", "Sonenjump", 30000, 100); #setelah menggunakan constructor
$produk2 = new Game("PUBG", "DANIEL LOG", "Barbare", 80000, 150);

$cetakProduk = new cetakInfoProduk(); #pemanggilan konsep abstrak
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
