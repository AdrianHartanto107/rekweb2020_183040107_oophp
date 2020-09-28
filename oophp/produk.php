<?php

class Produk {
	public $judul = "judul", 
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLable(){
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "onepiece";
// $produk2->tambahProperty = "hahahhihi";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "saburo";
$produk3->penulis = "konie";
$produk3->penerbit = "bashosen";
$produk3->harga = 30000;
var_dump($produk3);

echo "Komik : $produk3->penulis, $produk3->penerbit";

echo "<br>";


$produk4 = new Produk();
$produk4->judul = "maleficent";
$produk4->penulis = "disney";
$produk4->penerbit = "pixar";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLable();
echo "<br>";
echo "Game : " . $produk4->getLable();