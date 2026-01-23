<?php
$nama = "Nyoman";
if($nama == "Nyoman"){
    //kode bila kondisi bernilai benar
    echo "selamat datang Nyoman" . "<br>";
}
?> 

<!-- ===== If Elseif Else ===== -->

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

<!-- ===== If Bersarang ===== -->

<?php 
echo "<br>";

$nilaiTes = 90;
$wawancara = "A";

if($nilaiTes >= 70){
    echo "Anda Lulus ";
    if($wawancara == "A"){
        echo "Predikat anda sangat memuaskan";
    }else if($wawancara == "B"){
        echo "Predikat anda memuaskan";
    }else{
        echo "Mohon maaf anda belum lulus";
    }
}else{
    echo "Anda Tidak Lulus";
}


?>

<!-- ===== Switch ===== -->

<?php 
echo "<br>";

$nilaisaya = 'A';
switch($nilaisaya){
    case 'A':
        echo "Anda Lulus";
        break;
    case 'B' :
        echo "Anda Lulus";
        break;
    default:
        echo "Anda Tidak Lulus";
        break;
}
echo "<br>";
?> 


<!-- ===== Pengecekan Kondisi Ganda ===== -->

<?php 
$warna = 'Merah';
$ukuran = 'XL';

$biaya = 80000;
$biaya_tambahan = 5000;

if($warna == 'Merah' && $ukuran == 'L'){
    echo "Total harga: " . ($biaya + $biaya_tambahan);
}else{
    echo "Total harga: " . $biaya;
}
?>

<!-- ===== Ternary Operator ===== -->

<?php 
echo "<br>";

$kupon = 'ANC';

echo ($kupon >= 'ANC') ? "Anda Mendapatkan Diskon 10%" : "Kode Diskon salah";

?>


