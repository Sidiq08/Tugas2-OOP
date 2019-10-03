<?php 
	class Produk {
	public 	$judul, 
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain,
			$tipe;


	public function __construct($judul = "judul",$penulis = "penulis" ,$penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 , $waktuMain = 0, $tipe = "tipe"){
		 $this->judul = $judul;
		 $this->penulis = $penulis;
		 $this->penerbit = $judul;
		 $this->harga = $harga;
		 $this->jmlHalaman = $jmlHalaman;
		 $this->waktuMain = $waktuMain;
		 $this->tipe = $tipe;
	}		

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if ($this->tipe == "Novel") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} elseif ($this->tipe == "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}

		return $str;
	}
}

class CetakInfoProduk{
	public function cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

		return $str;
	}
}

$produk1 = new Produk("The Power OF Milenial", "Deddy Corbuzier", "Gramedia", 200000,245,0,"Novel");
$produk2 = new Produk("Senja dan Pagi", "Allfy Rev", "M.Sidiq", 50000,167,0,"Novel");
$produk3 = new Produk("Konsfirasi Alam Semesta", "Fiersa Busari", "Sidiq", 760000, 58,0,"Novel");
$produk4 = new Produk("Single", "Raditya Dika", "Sidiq", 65000,98,0,"Novel");
$produk5 = new Produk("Naruto", "Masahsi Kisimoto", "Shonenjump", 25000,0,100,"Game");

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
 echo $produk1->getInfoLengkap();
  echo "<br>";
  echo $produk5->getInfoLengkap();
 ?>