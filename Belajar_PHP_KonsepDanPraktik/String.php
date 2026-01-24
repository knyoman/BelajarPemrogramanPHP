<?php 
$nama = "saya nyoman Kusuma ";

// manipulasi string

echo strlen($nama) . "<br>"; // menghitung panjang string
echo strtoupper($nama) . "<br>";// mengubah string menjadi huruf besar
echo strtolower($nama) . "<br>";// mengubah string menjadi huruf kecil
echo ucfirst($nama) . "<br>"; // mengubah huruf pertama menjadi huruf besar
echo ucwords($nama) . "<br>"; // mengubah setiap awal kata menjadi huruf besar
echo strrev($nama) . "<br>"; // membalikkan string
echo str_replace("nyoman", "budi", $nama) . "<br>"; // mengganti kata dalam string
echo str_repeat($nama, 3) . "<br>"; // mengulang string


?>