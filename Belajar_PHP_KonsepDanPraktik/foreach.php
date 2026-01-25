<?php 

$warna1 = ['merah', 'hijau', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat', 'merah', 'merah', 'kuning', 'hijau', 'coklat'];

$jumlah = 0;

// foreach($warna as $key => $value){
//     echo "warna saat ini pada indeks ke-$key $value <br>";
// }


foreach($warna1 as $warna){
    if($warna == 'hijau'){
        $jumlah++;
    }
    echo "Warna saat ini $warna <br>";
}

echo "jumlah warna $jumlah";


?>