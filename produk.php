<?php 

class Produk {
	public $judul, 
			$penulis,
			$penerbit,
			$harga;


	public function __construct($judul = "judul",$penulis = "penulis" ,$penerbit = "penerbit", $harga = 0){
		 $this->judul = $judul;
		 $this->penulis = $penulis;
		 $this->penerbit = $judul;
		 $this->harga = $harga;
	}		

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul =  "Boruto";

// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul =  "NFS";
// $produk2->psss =  "Boruto";
// var_dump($produk2);

$produk3 = new Produk("NFS", "Boruto", "Sidiq", 10000);
// $produk3->judul =  "NFS";
// $produk3->penulis =  "Borssto";
// $produk3->penerbit = " Sidiq";
// $produk3->harga = 10000;


$produk4 = new Produk();
$produk4->judul =  "Uncharted";
$produk4->penulis =  "Neil Druckman";
$produk4->penerbit = " Sony Computer";
$produk4->harga = 100000;

echo "Komik : ".$produk3->getLabel();
echo "<br>";
echo "<br>";
echo "Game : ".$produk4->getLabel();
echo "<br>";
var_dump($produk3)
 ?> 