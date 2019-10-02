<?php 
	class Produk {
	public	$judul, 
			$penulis,
			$penerbit,
			$harga;


	public function __construct($judul = "judul",$penulis = "penulis" ,$penerbit = "penerbit", $harga = 0)
	{
		 $this->judul = $judul;
		 $this->penulis = $penulis;
		 $this->penerbit = $judul;
		 $this->harga = $harga;
	}		

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new Produk("The Power OF Milenial", "Deddy Corbuzier", "Gramedia", 200000);
$produk2 = new Produk("Senja dan Pagi", "Allfy Rev", "M.Sidiq", 50000);
$produk3 = new Produk("Konsfirasi Alam Semesta", "Fiersa Busari", "Sidiq", 760000);
$produk4 = new Produk("Single", "Raditya Dika", "Sidiq", 65000);

$produk1->getLabel();
$produk2->getLabel();
$produk3->getLabel();
$produk4->getLabel();

var_dump($produk1);
echo "<br>";
var_dump($produk2);
echo "<br>";
var_dump($produk3);
echo "<br>";
var_dump($produk4);
 ?>