<?php 

// for(inisialisasi; kondisi; perubahan;)

for($i = 1; $i <= 3; $i++){
    echo "Hari ke-$i <br>";
}

echo "<hr>";
// Menampilkan Bilangan Genap

for($i = 0;  $i <= 20; $i++){
    echo ($i % 2 == 0) ? "Angka ke-$i <br>" : null;
}

?>