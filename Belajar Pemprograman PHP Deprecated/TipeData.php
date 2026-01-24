 <!--
 ============================================================
         Tipe Data 
 ============================================================ 
-->

<!-- ===== Tipe Data String ===== -->
<!-- Kegunaan String Input user, teks, html -->

<?php 
$nama = "Nyoman Kusuma";
$alamat = "Mesuji MAKMUR";
?>

<!-- Perbedaan "" vs '' -->

<?php 
$umur = 21;

echo "umur saya $umur"; //diproses
echo '<br>';
echo 'umur saya $umur'; //literal
?>

<?php
echo "<br>";
$namaDepan = "Nyoman";
$namaBelakang = "Kusuma";
$namaLengkap = $namaDepan . $namaBelakang;
echo "Nama saya $namaLengkap";
?>

<!-- Mengubah nilai dari string -->

<?php 
$nama1 = "Nyoman";
$nama1 = "Adit";
echo "<br>";
echo $nama1;
?>

<!-- String Immutable -->

<?php 
echo "<br>";
$nama2 = "Nyoman";
$nama2 .= " Kusuma";
echo $nama2;

?>

<!-- Menghitung panjang string -->

<?php 
echo "<br>";
$kata = "á";
echo strlen($kata); //kegunaan strlen adalah menghitung panjang string dengan menghitung byte
echo "<br>";
echo mb_strlen($kata); //kegunaan mb_strlen adalah menghitung panjang string dengan menghitung karakter

// Contoh pada saat di gunakan untuk aplikasi multibahasa gunakan mb_strlen untuk menghitung panjang string dengan menghitung karakter
echo "<br>";
$username = "Nyoman";
if (mb_strlen($username, 'UTF-8') < 5) {
    echo "Username minimal 5 karakter";
}
?>


<!-- ===== Integer ===== -->

<?php 
echo "<br>";
$umur = 21;
echo $umur;



/*
Integer Overflow
Nilai integer terbesar yang bisa di simpan oleh php di mesin 
- 32-bit   --> 2,147,483,647
- 64-bite  --> 9,223,372,036,854,775,807
di atas angka tersebut integer tidak muat lagi
*/

$max = PHP_INT_MAX;
echo $max;
echo "<br>";
echo var_dump($max + 1);

echo "<br>";
echo "010" == 10;
echo "<br>";
echo "010" === 10;

// menampilkan angka random 
echo "<br>";
echo random_int(1, 1000);

// menampilkan angka dengan format
echo "<br>";
echo number_format(10 / 100, 3);
?>



<!-- ===== Float ===== -->

<?php 
echo "<br>";
echo 0.1 + 0.2;

echo "<br>";
$a = 10.3;
$b = 3;
echo $a + $b;
echo "<br>";
echo $a * $b;
echo "<br>";

// contoh kasus 
$tugas = 90.4;
$quis = 80.3;
$uts = 95.0;
$uas = 85.3;

$nilai = ($tugas + $quis + $uts + $uas) / 4;
echo $nilai;
echo "<br>";

// Latihan 1
$berat = 65.5;
$tinggi = 170.2;
echo "Berat: $berat kg, Tinggi: $tinggi cm";
echo "<br>";
?>


<!-- ===== Tipe Data Boolean ===== -->
<!-- 
operator perbandingan 
==    -> Sama
===   -> Sama dan Tipe Data
!=    -> Tidat Sama
>     -> lebih besar
<     -> lebih kecil 

operator logika 
and 
or
xor
&&
||
!

-->

<?php 
$a = true;
var_dump($a);
// echo $a;
echo "<br>";
$nilai1 = 12;
$nilai2 = 10;
$nilai = $nilai1 != $nilai2;
var_dump($nilai);
echo "<br>";

//contoh 
var_dump ( 5 == "5");
var_dump (5 === "5");
?>


<!-- ===== Tipe Data Array ===== -->

<?php 
echo "<br>";
$hewan = array("ayam", "kambing", "kucing");
$hewan[10]= "babi";
var_dump($hewan);
echo "<br>";
echo $hewan[15] ?? 'tidak ada';

echo "<br>";
$hewan[0] = "domba";
echo $hewan[0];

echo "<br>";
$makanan[] = "nasi";
$makanan[] = "mie";
$makanan[] = "soto";
var_dump($makanan);
echo "<br>" . "makanan favorit saya " . $makanan[2];
echo "<br>";

// array Assosiatif
$hobi["hobi1"] = "main bola";
$hobi["hobi2"] = "membaca";
echo $hobi['hobi1'] . "<br>";

$datadiri = [
        "nama" => "Nyoman",
        "umur" => 21,
        "alamat" => "Mesuji Makmur"
];
var_dump($datadiri);
echo "<br>";

// Array Multidimensi
$arayMultidimensi = [100, true, [
        "jeruk", "mangga", "pisang"
]];

var_dump($arayMultidimensi);
echo "<br>";
echo $arayMultidimensi[2][1];
echo "<br>";

$herbifora = ["Kambing", "sapi", "kerbau"];
$karnivora = ["harimau", "singa", "srigala"];
$omnivora = ["gajah", "ular", ""];

$binatang = ["Herbifora" => $herbifora, "Karnivora" => $karnivora, "Omnivora" => $omnivora];
echo $binatang["Herbifora"][1]; 
?> 


<!-- ===== Tipe Data Null ===== -->

<?php
$pesan = null;
echo "<br>" . $pesan;

$data = [
        "nama" => "Nyoman",
        "umur" => null,
        "alamat" => "Mesuji Makmur"
];

echo "<br>" . $data["umur"];
// echo "<br>" . $data["status"] ?? null;


