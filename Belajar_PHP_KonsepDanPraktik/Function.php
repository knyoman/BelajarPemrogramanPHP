<?php 
function penjumlahan(){
    $nama = "Nyoman Kusuma";
    $umur = 21;
    echo "Halo, nama saya $nama, umur saya $umur, lima tahun lagi umur saya menjadi ", $umur + 5;
}

function pengurangan(){
    echo "<br>";
    $a = 2;
    $b = 4;
    echo $a - $b;
}

penjumlahan();
pengurangan();
?>