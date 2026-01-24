<!-- ===== Perulangan For ===== -->

<?php 

for ($i = 0; $i <= 5; $i++){
    echo "$i. Selamat Pagi! <br>"; 
}

for($x = 20; $x >= 1; $x -= 2){
    echo $x . "<br>";
}
?>


<!-- ===== For Array ===== -->

<?php 
echo "<br>";

$warna = ["Merah", "Kuning", "Hijau", "Merah", "Kuning", "Hijau", "Kuning", "Hijau", "Merah"];

$jumlah = 0;

for ($i = 0; $i < 8; $i++){
    if($warna[$i] == "Merah"){
        $jumlah++;
    }
}

// if($warna[0] == "Merah"){
//     $jumlah++;
// }
// if($warna[1] == "Merah"){
//     $jumlah++;
// }
// if($warna[2] == "Merah"){
//     $jumlah++;
// }
echo $jumlah;
?>


<!-- ===== While ===== -->

<?php 
echo "<br>";

$hobi = ["Membaca", "Main Bola", "Main Voli", "Membaca", "Membaca", "Main Voli", "Membaca"];

$jumlah_Membaca = 0;

$i = 0;
while($i < 7){
    if ($hobi[$i] == "Membaca"){
        $jumlah_Membaca++;
    }
    $i++;
}
echo "Jumlah siswa yang hobi Membaca sebanyak: " . $jumlah_Membaca;

// do while
echo "<br>";

$x = 1; 
do{
    echo "Nomor antrian: $x <br>";
    $x++;
}while($x <= 20);
?>


<!-- ===== Foreach ===== -->

<?php  
echo "<br>"; 

$status = ["Jomlo", "Nikah", "Jomblo", "Jomlo", "Jomlo", "Jomlo"];

$jumlah_jomlo = 0;

foreach($status as $key => $value){
    echo "indek ke-$key berisi status $value <br>";
    if($value == "Jomlo"){
        $jumlah_jomlo++;
    }
}
echo "Jumlah siswa yang berstatus jomlo sebanyak: " . $jumlah_jomlo;
?> 


<!-- ===== Break ===== -->

<?php 
echo "<br>";

$kru = ["toni", "budi", "caca", "dian", "eko", "adit", "tono"];

foreach ($kru as $key => $nama){
    echo "Nama: $nama <br>"; 
    if ($nama == "caca"){
        echo "caca berada di indek ke-$key <br>";
        break;
    } 
} 
?>

<!-- ===== Continue ===== -->

<?php 
echo "<br><hr>";

$siswa = [
    ['nama' => 'budi', 'nilai' => 'A'],
    ['nama' => 'caca', 'nilai' => 'A'],
    ['nama' => 'dian', 'nilai' => 'B'],
    ['nama' => 'eko', 'nilai' => 'C'],
    ['nama' => 'fafa', 'nilai' => 'A'],
];

foreach ($siswa as $key => $value){
    if ($value['nilai'] != 'A')
        continue;
    echo "Nama: " . $value['nama'] . "<br>";
    echo "Nilai: " . $value['nilai'] . "<br><br>";
}
?>

<!-- ===== Menampilkan Data ke Tabel ===== -->

<?php 
echo "<br><hr>";

$siswa = [
    ['nama' => 'budi', 'nilai' => 'A'],
    ['nama' => 'caca', 'nilai' => 'A'],
    ['nama' => 'dian', 'nilai' => 'B'],
    ['nama' => 'eko', 'nilai' => 'C'],
    ['nama' => 'fafa', 'nilai' => 'A'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr> 
            <th>nama</th>
            <th>nilai</th>
        </tr>
        <?php  foreach ($siswa as $key => $value ): ?>
        <tr>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['nilai']; ?></td>
        </tr>
        <?php endforeach; ?>
</table>
</body>
</html>