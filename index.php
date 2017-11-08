<?php
require('interfaceKegunaan.php');
require('interfaceKepemilikan.php');
require('AbstractElektronik.php');
require('ClassKomputer.php');
require('ClassLaptop.php');


$komp = new Komputer();
echo $komp->tegangan(6);
echo "</br>";
echo $komp->arus();
echo "</br>";
echo $komp->belajar();
echo "</br>";


$lap = new Laptop();
echo $lap->tegangan(5);
echo "</br>";
echo $lap->arus();
echo "</br>";
echo $lap->belajar();
echo "</br>";
echo $lap->kepemilikan("Cris");
echo "</br>";

?>