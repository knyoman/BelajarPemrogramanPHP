<?php 

$warna = ['merah', 'hijau', 'kuning', 'hijau', 'hitam','coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat'];

echo "Saya mau cari warna Hitam <br>";

foreach($warna as $key => $value){
    echo "warna pada elemen ke-$key adalah $value <br>";
    
    if($value == 'hitam'){
        echo "warna hitam ada di indeks ke-$key";
        break;
    }
}


?>