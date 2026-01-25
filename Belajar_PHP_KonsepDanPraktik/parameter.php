<?php 

function gantiNama(&$nama, &$alamat){
    $nama = 'man';
    $alamat = 'OKI';
}
$nama = 'nyoman';
$alamat = 'mesuji';
gantiNama($nama, $alamat);

echo $nama, $alamat;
?>