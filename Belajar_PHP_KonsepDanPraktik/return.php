<?php 

// function perkalian($nilai1, $nilai2){
//     $hasil = $nilai1 * $nilai2 / 2;
//     return $hasil;
// }   

// $hasilPerkalian = perkalian(2,4);
// echo $hasilPerkalian * 3;


$alas = 10;
$tinggi = 3;

function luasSegitiga($alas, $tinggi){
    $hasil = $alas * $tinggi / 2;
    return $hasil;
} 
echo "Luas segitiga adalah.." . luasSegitiga($alas, $tinggi) * 10;
?>