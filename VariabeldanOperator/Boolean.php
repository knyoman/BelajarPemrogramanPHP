<?php

echo "<h1>Boolean</h1>";
echo "<br>";
/*
nilai true itu sama dengan 1 kalau false itu sama dengan 0
Boolean itu biasanya di gunakan untuk mengecek kondisi
*/

$x = true; #akan menghasilkan 1 karena true itu 1
$y = false; #akan menghasilkan kosong karena false itu 0
echo $x;
echo "<br>";
echo $y;
var_dump($x);
var_dump($y);

$data = "";
var_dump((bool)$data);


/*
Operator perbandingan
==  : sama dengan
!=  : tidak sama dengan
<>  : tidak sama dengan
<   : kurang dari
>   : lebih dari
<=  : kurang dari sama dengan
>=  : lebih dari sama dengan
*/

echo "<br>";
$a = "a";
$b = "A"; 
$c = $a !== $b;
var_dump($c);

print ord("A");
echo "<br>";
print ord("a");


/*
Operator Logika
&& : dan
|| : atau
!  : tidak
and : dan
or  : atau
xor : exclusive or
*/
/*
and bernilai true jika kedua nilai true
or bernilai true jika salah satu nilai true
xor bernilai true jika salah satu nilai true tapi tidak keduanya
! negasi, membalik nilai
*/
echo "<br>";
$m = true;
$n = false;
$k = $m && ($n || $n) && $n;
var_dump($k);

