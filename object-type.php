<?php 
	class Produk {
	public 	$judul, 
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

class CetakInfoProduk{
	public function cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

		return $str;
	}
}

$produk1 = new Produk("The Power OF Milenial", "Deddy Corbuzier", "Gramedia", 200000);
$produk2 = new Produk("Senja dan Pagi", "Allfy Rev", "M.Sidiq", 50000);
$produk3 = new Produk("Konsfirasi Alam Semesta", "Fiersa Busari", "Sidiq", 760000);
$produk4 = new Produk("Single", "Raditya Dika", "Sidiq", 65000);

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();
echo "<br>";
echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();
echo "<br>";
$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1);
 ?>