<?php
$nama = "Adit";
if($nama == "Nyoman"){
    //kode bila kondisi bernilai benar
    echo "selamat datang Nyoman";
}
?> 

<?php 
$nilai = 50;
if($nilai >= 90){
    echo "Nilai A " . $nilai;
}elseif($nilai >= 80) {
    echo "Nilai B " . $nilai;
}elseif($nilai >= 70){
    echo "Nilai C " . $nilai;
}else{
    echo "Nilai D " . $nilai;
}

?> 