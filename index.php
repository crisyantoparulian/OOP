<?php
require('interfaceKegunaan.php');
require('interfaceKepemilikan.php');
require('AbstractElektronik.php');
require('ClassKomputer.php');
require('ClassLaptop.php');


$komp = new Komputer();	 //buat objek komputer
echo "Tegangan komputer = ".$komp->tegangan(6);	//dari abstract 
echo "</br>";
echo "Arus komputer = ".$komp->arus();	//dari abstract 
echo "</br>";
$komp->fungsi="Matematika";
echo "Fungsi komputer Untuk = ".$komp->belajar(); // dari implements
echo "</br>";
echo "</br>";

$lap = new Laptop();   //buat objek laptop

echo "Tegangan Laptop = ".$lap->tegangan(5);	//dari abstract 
echo "</br>";
$lap->ar = "70";
echo "Arus Laptop = ".$lap->arus(); //dari abstract 
echo "</br>";
echo "Fungsi Laptop = ".$lap->belajar(); //dari implements
echo "</br>";
echo "Laptop Ini ".$lap->kepemilikan("Cris"); //dari implements
echo "</br>";

?>