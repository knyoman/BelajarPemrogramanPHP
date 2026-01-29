<h3>Basic Array</h3>

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

echo "<hr>";

$nilai = 80;
$kehadiran = true;

if($nilai >= 75 && $kehadiran){
    echo "LULUS";
}else{
    echo "TIDAK LULUS";
}
?>

<h3>Associative Array (Key-Value Pair)</h3>

<?php 

$data = [
    'nama' => 'Nyoman',
    'umur' => '21',
    'aktif' => true
];

echo $data['nama'] .'<br>';

$data['umur'] = 22;
echo $data['umur'] . "<br>";

$data['alamat'] = 'Bali';
print_r($data);

?>

<h3>Multidimensional Array(array di dalam array</h3>

<?php

$user = [
    [
        'nama' => 'nyoman',
        'umur' => 21
    ],
    [
        'nama' => 'adit',
        'umur' => 20
    ]
];

echo $user[0]['nama'];
echo $user[0]['umur'];

// Menambah data baru
$user[] =[
    'nama' => 'dewa',
    'umur' => 21
];
echo "<br>";
print_r($user);

$user[2]['nama'] = 'indra';
echo "<br>";
print_r($user);
?>