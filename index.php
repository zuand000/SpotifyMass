<?php
require "function.php";
date_default_timezone_set("Asia/Jakarta");

$run = banner($Green,$White);
echo " 
Tutorial : Jika Ingin Rubah Password Silakan Pergi Ke Config.json

Silakan Pilih List DiBawah Ini\n ϟ 1. Account Generator\n ϟ 2. Exit\n\n Masukan Pilihanmu : ";
$pilih = trim(fgets(STDIN));
if($pilih == "1"){
	$run = generateAccount($Red,$White,$Green,$Grey,$Blue);
	} else {
		exit("\n$White ϟ $Red Jika Perlu Bantuan Kontak Saya Di Email anonsecteaminc@gmail.com\n\n");
}
?>