<?php 

// define('NAMA', "Muhammad Aulia Asshiddiqie");
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// echo "<hr>";


// class Coba{
// const NAMA = "Sidiq ";
// }

// echo Coba::NAMA;
 
// echo __LINE__;







// function coba(){
// 	return __FUNCTION__;
// }

// echo coba();


class Coba{
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

 ?>
