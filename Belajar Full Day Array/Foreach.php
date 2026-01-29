<h3>Collection Loop</h3>

<?php 
/*
Pola dasar foreach

foreach ($data as $item) {
    if (kondisi) {
        aksi
    }
}
*/

echo '<p>===== Bentuk Dasar foreach =====</p>';

$warna = ['merah', 'kuning', 'biru'];

foreach ($warna as $i) {
    echo $i . '<br>';
}


echo '<p>===== foreach dengan Key & Value =====</p>';

$data = [
    "nama" => "Nyoman",
    "umur" => 21,
    "jurusan" => "Informatika"
];

foreach ($data as $key => $value){
    echo $key . ': ' . $value .'<br>';
}


echo '<p>===== hitung jumlah nilai yg ada di kumpulan data =====</p>';

$warna1 = ["hijau", "merah", "biru", "hijau", "hijau"];
$jumlah = 0;

foreach ($warna1 as $i ){
    if ($i == "hijau"){
        $jumlah++;
    }
}

echo $jumlah;


echo '<p>===== Hak Akses User =====</p>';

$role = ['admin', 'editor', 'user'];
$cek = 'admin';
$punyaAkses = false;


foreach ($role as $roles){
    if ($roles == $cek){
        $punyaAkses = true;
        break;
    }
}

echo $punyaAkses ? 'Anda sebagai admin' : 'bukan sebagi admin';



echo '<p>===== Total dan detail transaksi =====</p>';

$belanjaan = [
    ["produk" => "Buku", "harga" => 20000],
    ["produk" => "Pulpen", "harga" => 5000],
    ["produk" => "Penghapus", "harga" => 3000]
];
$total = 0;

foreach ($belanjaan as $i){
    echo "nama produk: " . $i["produk"] ." Harga: ".$i["harga"] ."<br>";
    $total += $i["harga"];
}

echo "total belanjaan anda: $total";


echo '<p>===== Filter Data Mahasiswa =====</p>';

$mahasiswa = [
    ["nama" => "Ayu", "jurusan" => "Informatika"],
    ["nama" => "Budi", "jurusan" => "SI"],
    ["nama" => "Citra", "jurusan" => "Informatika"]
];

foreach ($mahasiswa as $i){
    if ($i["jurusan"] == "Informatika"){
        echo $i["nama"] ."<br>";
    }
}


echo '<p>===== Notifikasi atau Broadcast =====</p>';

$emailUser = ["a@gmail.com", "b@gmail.com", "c@gmail.com"];

foreach ($emailUser as $i) {
    echo "Halo terimakasih sudah mendaftar: $i <br>";
}


echo '<p>===== monitoring Sistem (Cek Data Error) =====</p>';

$logs = [
    ["level" => "info", "msg" => "Login sukses"],
    ["level" => "error", "msg" => "Password salah"],
    ["level" => "warning", "msg" => "Percobaan login"]
];

foreach ($logs as $i) {
    if ($i["level"] == "error") {
        echo "Error: " .$i["msg"];
    }
}


echo '<p>===== Generate Menu Website =====</p>';

$menu = ["Home", "Profil", "Kontak", "Login"];

echo "<ul>";
foreach ($menu as $i) {
    echo "<li>$i</li>";
}
echo "</ul>";


echo '<p>===== Klasifikasi Data (Grouping) =====</p>';

$mahasiswa = [
    ["nama" => "Ayu", "status" => "aktif"],
    ["nama" => "Budi", "status" => "cuti"],
    ["nama" => "Citra", "status" => "aktif"],
];

$aktif =[];
$cuti = [];

foreach ($mahasiswa as $i) {
    if ($i["status"] == "aktif") {
        $aktif[] = $i["nama"];
    }else{
        $cuti[] = $i["nama"];
    }
}

echo "Data siswa yang aktif: ";
print_r($aktif);
echo "<br> Data siswa yang cuti: ";
for ($i = 0; $i < count($cuti); $i++) {
    echo $cuti[$i];
}


echo '<p>===== menggabungkan isi array jadi satu =====</p>';

$kata = ['ibu', 'saya', 'sedang', 'memasak', 'sayur'];
$kalimat = "";

foreach ($kata as $i) {
    $kalimat .= $i ." ";
}

echo $kalimat;


echo '<p>===== Akumulasi Bertingkat (total nilai perkelas) =====</p>';


$kelas = [
    "A" => [80, 70, 90],
    "B" => [60, 75, 85]
    /*
    ['namaKelas' => 'A', 'nilai' => [80, 70,90];
    ['namaKelas' => 'B', 'nilai' => [60, 75,85];
    */
];

foreach ($kelas as $namaKelas => $nilai){
    $total = 0;
    foreach ($nilai as $i) {
        $total += $i;
        
    }
    echo "Total kelas $namaKelas: " .$total ."<br>";
    
}







?>