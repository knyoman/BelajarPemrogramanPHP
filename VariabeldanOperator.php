<?php

echo "<h1>Integer Float</h1>";echo "<br>";

#membuat variabel
$a = 10;
$b = 6;
$c = $a / $b;
echo $c;
echo "<br>";
echo "Hasilnya: " . round($c); echo "<br>"; #membulatkan angka
echo "Hasilnya: " . round($c, 3); echo"<br>";

# increment dan decrement
$x = 20;
$x++; # increment menambah 1
$x--; # decrement mengurangi 1
echo $x;

echo "<h1>String</h1>";
echo "<br>";

$Nama = "Nyoman Kusuma ";
echo $Nama;
$Pesan = "Selamat Datang, $Nama ";
echo "<br>$Pesan";
echo "<br>" . $Nama . $Pesan;