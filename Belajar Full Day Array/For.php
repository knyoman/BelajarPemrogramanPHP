<?php
// struktur dasar for
/*  
for (START; KONDISI; PERUBAHAN) {
    AKSI
}
*/

for ($i = 0; $i < 5; $i++) {
    echo $i . '<br>';
}

for ($i = 0; $i < 5; $i++) {
    echo 'nyoman' . '<br>';
}

// loop array dengan count() -> tidak tau jumlah datanya 
echo '<p>===== Manual Indexing Loop(for + Array) =====</p>';

$warna = ["merah", "biru", "hijau", "merah"];

echo "<br>";
for ($i = 0; $i < count($warna); $i++) {
    echo $warna[$i] . "<br>";
}


echo '<p>===== Menampilkan dengan nomor =====</p>';

$buah = ['aple', 'jeruk', 'mangga'];

for ($i = 0; $i < count($buah); $i++) {
    echo ($i + 1) . ' ' . $buah[$i] . "<br>";
}

echo '<p>===== Filter Data =====</p>';

$warna1 = ["merah", "biru", "merah", "hijau"];
$hasil = [];

for ($i = 0; $i < count($warna1); $i++) {
    if ($warna1[$i] == 'merah') {
        $hasil[] = $warna1[$i];
    }
}

print_r($hasil);

echo '<p>===== Hitung Data =====</p>';

$nilai = [80, 70, 60, 50];
$total = 0;

for ($i = 0; $i < count($nilai); $i++) {
    $total = $total + $nilai[$i];
}

$rata = $total / count($nilai);
echo "Rata-rata: " . $rata;


echo '<p>===== Validasi Data =====</p>';

$nilaiUjian = [80, 85, 80, 90, 60, 70, 89, 95];
$adaGagal = false;

for ($i = 0; $i < count($nilaiUjian); $i++) {
    if ($nilaiUjian[$i] > 70) {
        $adaGagal = true;
        break;
    }
}

if ($adaGagal) {
    echo 'Ada siswa yang tidak LULUS';
} else {
    echo 'Semua siswa LULUS';
}


echo  '<p>===== Pencarian Data =====</p>';

$hobi = ['Berenang', 'Voli', 'Lari', 'Sepakbola', 'Bulutangkis'];
$cari = 'Voli';
$ada = false;

for ($i = 0; $i < count($hobi); $i++){
    if ($hobi[$i] == $cari){
        $ada = true;
        break;
    }
}

if ($ada){
    echo 'ada yang memiliki hobi Voli';
}else{
    echo 'tidak ada yang memiliki hobi Voli';
}


echo '<p>===== Pisahkan Data =====</p>';

$angka = [10, 11, 23, 20, 4, 8, 9, 3, 1];
$ganjil = [];
$genap = [];

for ($i = 0; $i < count($angka); $i++){
    if ($angka[$i] % 2 == 0){
        $genap[] = $angka[$i];
    }else {
        $ganjil[] = $angka[$i];
    }
}

echo "Genap: ";
print_r($genap);
echo "<br>" ."Ganjil: ";
print_r($ganjil);

echo "<br>";
echo "Angka Ganjil: ";
for ($i = 0; $i < count($ganjil); $i++){
    
    echo $ganjil[$i] . ' ';
}

echo '<p>===== Mengubah isi Data (Transformasi) atau menambahkan teks disetiap data =====</p>';

$anggota = ['Nyoman', 'Dewa', 'Indra'];

for ($i = 0; $i < count($anggota); $i++){
    $anggota[$i] = "Mahasiswa: " . $anggota[$i];
}
print_r($anggota);


echo '<p>===== Menghitung jumlah nilai yang muncul di dalam kumpulan data  =====</p>';

$impian = ['polisi', 'guru', 'dokter', 'guru', 'polisi', 'dokter'];
$jlhGuru = 0;

for ($i = 0; $i < count($impian); $i++){
    if ($impian[$i] == 'guru'){
        $jlhGuru += 1;
    }
}

echo "Jumlah guru: " .$jlhGuru;


echo '<p>===== Login/Auth   =====</p>';

$userAkun = ['admin', 'dosen', 'mahasiswa'];
$input = 'dosen';
$loginValid = false;

for ($i = 0; $i < count($userAkun); $i++){
    if ($userAkun[$i] == 'dosen'){
        $loginValid = true;
        break;
    }
}

echo $userAkun ? 'Login Berhasil' : 'Login Gagal';


echo '<p>===== Keranjang Belanjan   =====</p>';

$harga = [1200, 8000, 5000, 2000];
$total = 0;

for ($i = 0; $i < count($harga); $i++){
    $total += $harga[$i];
}

echo "Total pengeluaran: " .$total;


echo '<p>===== Mencari nilai tertinggi =====</p>';

$nilaiSiswa = [80, 90, 40, 95, 70];
$tertinggi = 0;

for ($i = 0; $i < count($nilaiSiswa); $i++){
    if ($nilaiSiswa[$i] > $tertinggi){
        $tertinggi = $nilaiSiswa[$i];
    }
}

echo "Nilai tertinggi: " .$tertinggi;


echo '<p>===== Validasi Email (Manual) =====</p>';

$email = ['a@gmail.com', 'b@gmail.com', 'c@gmail.com'];
$emailInput = 'c@gmail.com';
$terdaftar = false;

for ($i = 0; $i < count($email); $i++){
    if ($email[$i] == $emailInput){
        $terdaftar = true;
    }
}

echo $terdaftar ? 'Email terdaftar' : 'Email tidak terdaftar';


echo '<p>===== Manajemen Stok =====</p>';

$stok = [12, 20, 15, 8, 39, 2, 8];
$batas = 10;

for ($i = 0; $i < count($stok); $i++){
    if ($stok[$i] < $batas){
        echo "Stok rendah di index: $i jumlah: " . $stok[$i] .'<br>';
    }
}


?>