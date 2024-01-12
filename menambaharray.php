<?php
//contoh array
$cars = array("ferrary", "lamborghini aventador", "audi");
$negara=array ("Singapura", "Indonesia", "Jepang");
$kota=array ("Singapura", "Indramayu","Jepara");

//menambah array
var_dump($kota);
$kota [] = "Bogor";
echo"<br>";
var_dump($kota);
$kota[4] = "Jayapura";
echo"<br>";
var_dump($kota);

?>