<?php
// require_once 'produk/infoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/Komik.php';
// require_once 'produk/Game.php';
// require_once 'produk/cetakInfoProduk.php';

spl_autoload_register(function ($class) {
    require_once __DIR__ . '/Produk/' . $class . '.php';
});
