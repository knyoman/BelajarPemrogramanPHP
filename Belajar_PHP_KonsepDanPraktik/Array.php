<?php 
// Array 
$buah = [
    "apel", 
    "jeruk", 
    "mangga", 
    "pisang",
    true,
    12,
    null
];
print_r($buah);
echo "<br>" .$buah[3];


// Array Asosiatif
echo "<br><hr>";

$mahasiswa =[
    "nama" => "Nyoman Kusuma",
    "Umur" => 12,
];

echo "Nama: " .$mahasiswa["nama"];


// Array Multidimensi
echo "<br> <hr>";

$siswa = [
    [
        "naam" => "Nyoman Kusuma",
        "nim" => "231410049"
    ],
    [
        "nama" => "Rahel",
        "nim" => "231410050"     
    ]
];

echo $siswa[1]["nama"];
?>