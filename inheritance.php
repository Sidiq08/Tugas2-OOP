<?php 
	class Produk {
	public 	$judul, 
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain;


	public function __construct($judul = "judul",$penulis = "penulis" ,$penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 , $waktuMain = 0){
		 $this->judul = $judul;
		 $this->penulis = $penulis;
		 $this->penerbit = $judul;
		 $this->harga = $harga;
		 $this->jmlHalaman = $jmlHalaman;
		 $this->waktuMain = $waktuMain;
	}		

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Produk{

	public function getInfoProduk(){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk{

	public function getInfoProduk(){
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk{
	public function cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

		return $str;
	}
}

$produk1 = new Komik("The Power OF Milenial", "Deddy Corbuzier", "Gramedia", 200000,245,0,"Novel");
$produk2 = new Komik("Senja dan Pagi", "Allfy Rev", "M.Sidiq", 50000,167,0,"Novel");
$produk3 = new Komik("Konsfirasi Alam Semesta", "Fiersa Busari", "Sidiq", 760000, 58,0,"Novel");
$produk4 = new Komik("Single", "Raditya Dika", "Sidiq", 65000,98,0,"Novel");
$produk5 = new Game("Naruto", "Masahsi Kisimoto", "Shonenjump", 25000,0,100,"Game");

// echo $produk1->getLabel();
// echo "<br>";
// echo $produk2->getLabel();
// echo "<br>";
// echo $produk3->getLabel();
// echo "<br>";
// echo $produk4->getLabel();
// echo "<br>";
// $infoProduk = new CetakInfoProduk();
// echo $infoProduk->cetak($produ k1);
 echo $produk1->getInfoProduk();
  echo "<br>";
  echo $produk5->getInfoProduk();
 ?>