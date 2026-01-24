<!DOCTYPE html>
<?php 
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Selamat Datang, <?php echo $nama ;?></h1>
    <h2>Alanat saya, <?php echo $alamat ;?></h2>
    <p>Kita akan belajar dasar PHP</p>
</body>

</html>