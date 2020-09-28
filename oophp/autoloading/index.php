<?php 


require_once 'App/init.php';

$produk1 = new Komik("saburo", "konie", "bashosen", 30000, 100);

$produk2 = new Game("Maleficent", "disney", "pixar", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();