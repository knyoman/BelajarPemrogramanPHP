<!-- ===== Fungsi ===== -->

<?php

$kalimat = "Saya suka makan pizza";
echo str_word_count($kalimat) . "<br>";
echo str_replace("pizza", "pempek", $kalimat) . "<br>";


function cetakPesan($nama = null)
{
    if (empty($nama))
        echo "Selamat datang!";
    else
        echo "Selamat datang, $nama!" . "<br>";
}
cetakPesan('Nyoman');
cetakPesan();
?>

<!-- ===== Skup Variabel ===== -->

<?php
echo "<br><hr>";

function pesan($nama = null)
{
    // global $nama;
    $golDarah = 'B';
    if (empty($nama))
        echo "Selamat datang!";
    else
        echo "Selamat datang, $nama!" . "<br>";
}

$nama = "Nyoman";
pesan($nama);
?>


<!-- ===== Mengembalikan Hasil Proses Fungsi ===== -->

<?php
echo "<br><hr>";

$alas = 10;
$tinggi = 20;

function luasSegitiga($alas, $tinggi)
{
    $luas = $alas * $tinggi / 2;
    return $luas;
}
$hasil = luasSegitiga($alas, $tinggi);
echo $hasil;

echo "<br>";

function luasJajarGenjang($alas, $tinggi)
{
    $luas = ($alas + $tinggi) / 2;
    return $luas;
}
$hasilLuas = luasJajarGenjang($alas, $tinggi);
echo $hasilLuas;

?>

<!-- ===== Parameter Referensi ===== -->

<?php
echo "<br><hr>";

function gantiNama(&$nama)
{
    $nama = "Nama Baru";
}
$nama = "Nyoman";
gantiNama($nama);
echo $nama . "<br>";

function kalilipat(&$angka)
{
    $angka = $angka * 2;
}

$x = 3;
echo $x . "<br>";
kalilipat($x);
echo $x . "<br>";

?>