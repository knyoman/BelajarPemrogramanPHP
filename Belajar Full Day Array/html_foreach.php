<?php

echo "<h3>Menampilkan Data Mahasiswa ke dalam Tabel HTML menggunakan foreach</h3>";

$mahasiswa = [
    ["nama" => "Ayu", "nim" => "22001", "jurusan" => "Informatika"],
    ["nama" => "Budi", "nim" => "22002", "jurusan" => "Sistem Informasi"],
    ["nama" => "Citra", "nim" => "22003", "jurusan" => "Informatika"]
];

?>

<table border="1" cellpadding="5">
    <tr>
        <th class="">No</th>
        <th class="">Nama</th>
        <th class="">Jurusan</th>
    </tr>
    <?php $no = 1; ?>

    <?php foreach ($mahasiswa as $mhs): ?>
        <td><?= $no++; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
    <?php endforeach ?>

</table>