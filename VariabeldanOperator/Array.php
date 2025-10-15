<?php

echo "<h1>Array</h1>";
echo "<br>";
#Array adalah variabel yang dapat menyimpan banyak nilai
#Array itu bisa di isi dengan tipe data apa saja

$Hewan = array("Kucing", "Anjing", "Kelinci");
$Hewan[50] = "Burung";
echo $Hewan[50];
echo "<br>";
var_dump($Hewan);
echo "<br>";

# ?? itu untuk mengecek apakah ada data atau tidak jika tidak ada maka akan menampilkan data setelah ??
echo $Hewan[10] ?? "Data Tidak ada"; 
echo "<br>";

$Hewan[0] = "Ikan";
var_dump($Hewan);
echo "<br>";
print_r ($Hewan);
echo "<br>";


echo "<h1>Array Asosiatif</h1>";
echo "<br>";

#Array Asosiatif adalah array yang indexnya itu berupa string
$Data = array("Nama" => "Rizky", "Umur" => 20, "Alamat" => "Bandung");
echo $Data["Nama"];
