<?php 
$warna = ['merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat'];
$jumlah = 0;

for($i = 0; $i < count($warna); $i++){
    if ($warna[$i] == 'merah'){
        $jumlah++;
    }
}

echo $jumlah;

// if($warna[0] == 'merah') {$jumlah++;}
// if($warna[1] == 'merah') {$jumlah++;}
// echo "jumlah $jumlah"
?>