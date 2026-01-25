<?php 

// $i = 1;
// while($i <= 20){
//     echo "Nomer antrian Ke-$i <br>";
//     $i++;
// } 

$warna = ['merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat'];

$jumlah = null;
$i = 0;
// while($i < count($warna)){
//     if ($warna[$i] == 'merah'){
//         $jumlah++;
//     }
//     $i++;
// }

do {
    if ($warna[$i] == 'merah'){
        $jumlah++;
    }
    $i++;
}while($i < count($warna));

echo "jumlah $jumlah";

?>