<?php 

abstract class Produk {
	private $judul, 
			$penulis,
			$penerbit,
			$diskon =0, 
			$harga;


	public function __construct($judul = "judul",$penulis = "penulis" ,$penerbit = "penerbit", $harga = 0){

		 $this->judul = $judul;
		 $this->penulis = $penulis;
		 $this->penerbit = $penerbit;
		 $this->harga = $harga;
	}

	///////////////////SETGET DISKON//////////////////
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getDiskon (){
		return $this->diskon - ($this->harga * $this->diskon / 100);
	}
	//////////////////////////////////////////////////

	///////////////////SETGET HARGA//////////////////
	public function setHarga($harga){
		$this->harga = $harga;
	}

	public function getHarga (){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}		
	//////////////////////////////////////////////////

	///////////////////SETGET Penerbit//////////////////
	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit (){
		return $this->penerbit;
	}		
	//////////////////////////////////////////////////

	///////////////////SETGET Penulis//////////////////
	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}

	public function getPenulis (){
		return $this->penulis;
	}		
	//////////////////////////////////////////////////

	///////////////////SETGET Judul//////////////////
	public function setJudul($judul){
		$this->judul = $judul;
	}

	public function getJudul (){
		return $this->judul;
	}		
	//////////////////////////////////////////////////

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfoProduk();

	public function getInfo()	{
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Produk{
	public $jmlHalaman;

	public function __construct($judul = "judul",$penulis = "penulis" ,$penerbit = "penerbit", $harga = 0, $jmlHalaman =0){

		parent::__construct($judul,$penulis,$penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}


	public function getInfoProduk(){
		$str = "Komik : ".parent::getInfo()." - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk{

	public $waktuMain;

	public function __construct($judul = "judul",$penulis = "penulis" ,$penerbit = "penerbit", $harga = 0, $waktuMain = 0){

		parent::__construct($judul,$penulis,$penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk(){
		$str = "Game :".parent::getInfo()." - {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk{

	public $daftarProduk = array();

	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk;
	}


	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}

	$produk1 = new Komik("The Power OF Milenial", "Deddy Corbuzier", "Gramedia", 200000,245,"Novel");
	$produk2 = new Komik("Senja dan Pagi", "Allfy Rev", "M.Sidiq", 50000,167,"Novel");
	$produk3 = new Komik("Konsfirasi Alam Semesta", "Fiersa Busari", "Sidiq", 760000, 58,"Novel");
	$produk4 = new Komik("Single", "Raditya Dika", "Sidiq", 65000,98,"Novel");
	$produk5 = new Game("Naruto", "Masahsi Kisimoto", "Shonenjump", 22000,100,"Game");

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

 ?>