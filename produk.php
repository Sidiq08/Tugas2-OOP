<?php 

class Produk {
	public $judul = "judul", 
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;
}

// $produk1 = new Produk();
// $produk1->judul =  "Boruto";

// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul =  "NFS";
// $produk2->psss =  "Boruto";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul =  "NFS";
$produk3->penulis =  "Boruto";
$produk3->penerbit = " Sidiq";
$produk3->harga = 10000;

echo "Komik : $produk3->penulis, $produk3->penerbit";

 ?> 