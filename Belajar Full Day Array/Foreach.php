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

// contoh 1

$kelas = [
    "A" => [80, 70, 90],
    "B" => [60, 75, 85]
    /*
    ['namaKelas' => 'A', 'nilai' => [80, 70,90];
    ['namaKelas' => 'B', 'nilai' => [60, 75,85];
    */
];

foreach ($kelas as $namaKelas => $nilai){
    $total = 0; // agar memisahkan kelas a dan b
    foreach ($nilai as $i) {
        $total += $i;
        
    }
    echo "Total kelas $namaKelas: " .$total ."<br>";
    
}

// contoh 2 -> total penjualan perbulan

$penjualan = [
    'januari' => [100, 200, 120, 300],
    'februari' => [200, 100, 125,270]
];

foreach ($penjualan as $bulan => $transaksi){
    $total = 0;

    foreach ($transaksi as $t) {
        $total += $t;
    }
    echo "Total Penjualan di bulan $bulan: " .$total ."<br>";
}

// contoh 3 -> jumlah kehadiran perminggu 

$kehadiran = [
    "Minggu 1" => [1, 1, 1, 0, 1],
    "Minggu 2" => [1, 0, 1, 1, 1]
];

foreach ($kehadiran as $minggu => $hadir){
    $total = 0;
    foreach ($hadir as $i) {
        $total += $i;
    }
    echo "Total kehadiran di $minggu: $total <br>"; 
}

// contoh 4 -> total harga perkategori 

$produk = [
    "ATK" => [5000, 7000, 3000],
    "Elektronik" => [150000, 250000]
];

foreach ($produk as $nama => $nilai){
    $total = 0;
    foreach ($nilai as $i){
        $total += $i;
    }
    echo "Total harga $nama: $total <br>";
}


echo '<p>===== Mapping Data  (Transform) =====</p>';

$produk = [
    ["nama" => "Buku", "harga" => 12000],
    ["nama" => "Pulpen", "harga" => 5000]
];
$hasil = [];

foreach ($produk as $i){
    $hasil[] = $i["nama"] . ": Rp " . $i["harga"];
}

print_r($hasil);


echo '<p>===== Sinkronisasi Data =====</p>';
// cek data yang belum ada

//contoh 1

$dataLama = ["A", "B", "C"];
$dataBaru = ["B", "C", "D", "E", "F"];

$yangBaru = [];

foreach ($dataBaru as $d){
    if (!in_array($d, $dataLama)){
        $yangBaru[] = $d;
    }
}
print_r($yangBaru);
echo "<br>Data yang baru adalah ";
for ($i = 0; $i < count($yangBaru); $i++){
    echo $yangBaru[$i] ." ";
}

// contoh 2

$buahLama = ["apel", "jeruk"];
$buahBaru = ["jeruk", "mangga", "pisang", "apel"];
$ygBaru = [];

echo "<br>";
foreach ($buahBaru as $b){
    if (!in_array($b, $buahLama)) {
        $ygBaru[] = $b;
    }
}
print_r($ygBaru);

$adaBaru =[];

foreach ($buahBaru as $bb){
    $ada = false;
    
    foreach ($buahLama as $bl){
        if ($bb == $bl){
            $ada = true;
            break;
        }
    }

    if (!$ada){
        $adaBaru[] = $bb;
    }
}
echo "<br>";
print_r($adaBaru);


//contoh 3

$mahasiswaLama = ["Andi", "Budi", "Citra"];
$mahasiswaBaru = ["Budi", "Citra", "Dewi", "Eka"];

$pendaftarBaru = [];

foreach ($mahasiswaBaru as $mb){
    if (!in_array($mb, $mahasiswaLama)){
        $pendaftarBaru[]= $mb;
    }
}

echo "<br>";
print_r($pendaftarBaru);



echo '<p>===== Validasi Kompleks =====</p>';
//cetak data kosong

$form = [
    "nama" => "Andi",
    "email" => "",
    "password" => "123456"
];

$error =[];

foreach ($form as $filed => $values){
    if (empty($values)){
        $error[] = "$filed tidak boleh kosong" . $values;
    }
}
echo "<br>";
for ($i = 0; $i < count($error); $i++){
    echo $error[$i];
}

//contoh 2

$dataSiswa = [
    'nama' => 'Nyoman',
    'nim' => '231410049',
    'jurusan' => 'sistem informasi'
];

$pesan = [];

foreach ($dataSiswa as $fil => $nilai){
    if (empty($nilai)){
        $pesan[] = "$fil Tidak boleh kosong ";
    }
}
echo "<br>";
print_r($pesan);
?>