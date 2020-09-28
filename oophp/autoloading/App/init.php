<?php 

// require_one 'App/Produk/InfoProduk.php';
// require_one 'App/Produk/Produk.php';
// require_one 'App/Produk/Komik.php';
// require_one 'App/Produk/CetakInfoProduk.php';


spl_autoload_register(function($class){
	require_once __DIR__ .'Produk/' . $class . 'php';
});