<?php 

$mahasiswa =[
    ['nama' => 'adit', 'alamat' => 'mesuji', 'prodi' => 'sistem informasi'],
    ['nama' => 'soni', 'alamat' => 'oku', 'prodi' => 'teknologi informasi'],
    ['nama' => 'toni', 'alamat' => 'oi', 'prodi' => 'teknik informatika']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
        </tr>
        <?php foreach($mahasiswa as $value): ?>
        <tr>
            <td><?php echo $value['nama']?></td>
            <td><?php echo $value['alamat']?></td>
            <td><?php echo $value['prodi']?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>