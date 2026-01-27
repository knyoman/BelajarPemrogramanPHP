<?php 
$nama = 'nyoman';
$lemari = array('nyoman', 20, 100, null, true); // cara lama
$lemari1 = ['nyoman', 'adit', 'indra', 26, 100, true, null];// cara modern

print_r($lemari1);
echo "<br> nama yang di tampilkan di indek ke-1 " .$lemari1[1];
echo "<br>";
$lemari1[2] = 'dewa';
print_r( $lemari1);
echo "<br>";
$lemari1[] = 'tono';
print_r($lemari1);
echo "<br>";
unset($lemari1[0]);// menghapus nilai dan no indek nya
print_r($lemari1);
echo "<br>";
$lemari1 = array_values($lemari1);
print_r($lemari1);
echo "<br>" .$lemari1[0];

//Latihan
$buah = ["apel", "jeruk", "mangga", "pisang", true, 12, null];

echo "<hr>";
$buah[0] = 'durian';
echo $buah[0];
echo $buah[5] * 10;
?>