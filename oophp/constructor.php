<?php

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;


	}

	public function getLable(){
		return "$this->penulis, $this->penerbit";
	}
}



$produk1 = new Produk("saburo", "konie", "bashosen", 30000);

$produk2 = new Produk("Maleficent", "disney", "pixar", 250000);

$produk3 = new Produk("drball");


echo "Komik : " . $produk1->getLable();
echo "<br>";
echo "Game : " . $produk2->getLable();
echo "<br>";
var_dump($produk3);