<?php 

$ukuran = "XL";
$warna = "Biru";
$harga = 1000;

if($ukuran == "XL" && $warna == "merah"){
    $hargaTambahan = 1000;
    $jumlah = $harga + $hargaTambahan;
    
    echo "Biaya: ", $jumlah;
}else{
    echo "Biaya: ", $harga;
}

echo "<hr>";

$tujuan = "OKI";
$harga = 100;
$diskon = 2;

if($tujuan == "OKI" || $tujuan == "OKU"){
    $harga = $harga / $diskon;
}

echo "Total Biaya: ", $harga;

?>