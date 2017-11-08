<?php
require('interfaceKegunaan.php');
require('interfaceKepemilikan.php');
require('AbstractElektronik.php');
require('ClassKomputer.php');
require('ClassLaptop.php');
?>

<!doctype html>
<title>Example</title>
<style>
  * {
   box-sizing: border-box; 
  }
  body {
    margin: 0;
  }
  #main {
    display: flex;
    min-height: calc(100vh - 40vh);
  }
  #main > article {
    flex: 1;
  }
  #main > nav, 
  #main > aside {
    flex: 0 0 20vw;
    background: beige;
  }
  #main > nav {
    order: -1;
  }
  header, footer, article, nav, aside {
    padding: 1em;
  }
  header, footer {
    background: yellowgreen;
    height: 20vh;
  }
</style>
<body>
  <header>Pemograman Dengan OOP</header>
  <div id="main">
    <article><?php
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
?></article>
    <nav></nav>
    <aside></aside>
  </div>
  <footer>copyright @crisyanto</footer>

</body>