<?php
#menampilkan tesxt
echo "Hello, World!";
echo "<br>";
echo 22;

#membuat variabel
$a = 10;
$hobi = "Pemrograman Web";
$_Makanan = "Nasi";
$nama_lengkap = "Budi Santoso";

echo $a;
echo "<br>";
echo $hobi;
echo "<br>";
echo $_Makanan;
echo "<br>";
echo $nama_lengkap;

#Fungsi bawaan PHP
echo "<br>";
echo ucwords("hello world"); #membuat huruf awal menjadi kapital
echo "<br>";
echo strlen("Hello"); #menghitung jumlah karakter
echo "<br>";
echo str_replace("World", "Dunia", "Hello World"); #mengganti kata bersifat case sensitive
echo "<br>Contoh: ";
$nama = "Nyoman Kusuma Saputra Kusuma";
echo str_replace("Kusuma", "Putra", $nama);
echo "<br>";
echo strpos("Hello World", "World"); #mencari posisi karakter, bersifat case sensitive
echo "<br>";
echo strrev("Hello World"); #membalik karakter
echo "<br>";
echo trim("   Hello World   "); #menghilangkan spasi di awal dan akhir kalimat
echo "<br>";
echo ltrim("   Hello World   "); #menghilangkan spasi di awal kalimat
echo "<br>";
echo rtrim("   Hello World   "); #menghilangkan spasi di akhir kalimat
echo "<br>";
echo strtolower("Hello World"); #mengubah semua karakter menjadi huruf kecil
echo "<br>";
echo strtoupper("Hello World"); #mengubah semua karakter menjadi huruf besar
echo "<br>";
echo substr("Hello World Indonesia", 6); #mengambil sebagian karakter
echo "<br>";

