<?php 

$warna = ['merah', 'hijau', 'kuning', 'hijau', 'hitam','coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat'];

foreach($warna as $key => $value){
    if($value == 'hitam'){
        continue;
    }
    echo "warna pada elemen ke-$key adalah $value <br>";
}


?>