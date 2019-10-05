<?php 
	
	require_once 'App/init.php';

	$produk1 = new Komik("The Power OF Milenial", "Deddy Corbuzier", "Gramedia", 200000,245,"Novel");
	$produk2 = new Komik("Senja dan Pagi", "Allfy Rev", "M.Sidiq", 50000,167,"Novel");
	$produk3 = new Komik("Konsfirasi Alam Semesta", "Fiersa Busari", "Sidiq", 760000, 58,"Novel");
	$produk4 = new Komik("Single", "Raditya Dika", "Sidiq", 65000,98,"Novel");
	$produk5 = new Game("Naruto", "Masahsi Kisimoto", "Shonenjump", 22000,100,"Game");

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk5);
echo $cetakProduk->cetak();


 ?>