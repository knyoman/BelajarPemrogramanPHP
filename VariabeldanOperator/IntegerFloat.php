<?php
echo "<h1>Integer Float</h1>";
echo "<br>";

#membuat variabel
$a = 10;
$b = 6;
$c = $a / $b;
echo $c;
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

#contoh soal penggunaan increment dan decrement
echo "<br> Latihan Soal Increment dan Decrement <br>
Sebuah toko memiliki stok awal 50 buah barang. Hari ini, toko menerima 10 barang baru dan berhasil menjual 7 barang. Hitung sisa stok barang di toko! <br>";
$stok = 50;
$stok += 10;
$stok -= 7;
echo "Jawab sisa stok barang di toko: $stok";