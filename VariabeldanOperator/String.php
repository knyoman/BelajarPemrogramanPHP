<?php
echo "<h1>String</h1>";
echo "<br>";

$nama = "Nyoman Kusuma";
$umur = 21;
echo "Nama saya adalah $nama umur saya " . $umur;
echo '<br> Nama saya adalah $nama';

echo "<br> mengecek nilai tipe datanya";
echo "Ini adalah jenis type data: " . gettype($nama);
echo "<br>";

# . untuk menggabungkan string
echo $nama . $umur;

#menghitung jumlah karakter
echo str_repeat("<br>", 3);
echo strlen($nama);

#str_replace untuk mengganti kata atau karakter
$nama = str_replace("Nyoman", "Wayan", $nama);
echo "<br> $nama";

#strtolower untuk mengubah semua karakter menjadi huruf kecil
echo "<br>" . strtolower($nama);

#strtoupper untuk mengubah semua karakter menjadi huruf besar
echo "<br>" . strtoupper($nama);

#substr untuk mengambil sebagian karakter
echo "<br>" . substr($nama, 7); #mengambil karakter mulai dari index ke 7 sampai akhir


