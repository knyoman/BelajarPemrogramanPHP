<?php
echo "<h1>Integer Float</h1>";
echo "<br>";

#Operasi Aritmatika
$a = 10;
$b = 6;
$c = $a / $b;
echo $c;

echo "\n";
echo "Perkalian : " . $a + $b;
echo "<br>";


#var_dump() menampilkan type data dan nilainya dan gettype() untuk mengetahui tipe data
$Nilai = 50;
echo "<br>";
echo "Menampilkan tipe data dan nilanya" . var_dump($Nilai);
echo "<br>";
echo "Menampilkan tipe data saja: " . gettype($Nilai);

print "<br>" . gettype($c); #menampilkan tipe data, double itu sebutan lain untuk float

echo "<br>";
echo "Hasilnya: " . round($c);
echo "<br>"; #membulatkan angka
echo "Hasilnya: " . round($c, 3);
echo "<br>"; #membulatkan angka dengan 3 angka di belakang koma


# increment dan decrement
$x = 20;
$x++; # increment menambah 1 
$x--; # decrement mengurangi 1
#penggunaannya sama saja seperti $x = $x + 1;
echo $x;

#Operator penugasan
$DataBarang = 50;
$DataBarang += 10; #Sama saja seperti ini konsepnya $DataBarang = $DataBarang + 10;
echo "<br> Data Barang: $DataBarang";

#contoh soal penggunaan increment dan decrement
echo str_repeat("<br>", 3);
echo "Latihan Soal Increment dan Decrement <br>
Sebuah toko memiliki stok awal 50 buah barang. Hari ini, toko menerima 10 barang baru dan berhasil menjual 7 barang. Hitung sisa stok barang di toko! <br>";
$stok = 50;
$stok += 10;
$stok -= 7;
echo "Jawab sisa stok barang di toko: $stok";

echo str_repeat("<br>", 2);
echo "Latihan Increment dan Decrement <br>
Sebuah variabel x memiliki nilai awal 20. Lakukan operasi increment pada variabel tersebut sebanyak 1 kali, kemudian lakukan operasi decrement sebanyak 1 kali. Berapakah nilai akhir dari variabel x? <br>";

$x = 20;
$x++;
$x--;
echo "Jawab nilai terahir adalah: $x";
