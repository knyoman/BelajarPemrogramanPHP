
<?php 
$nama = $_GET["nama"];
$alamat = $_GET["alamat"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
    <input type="text" name = "nama">
    <input type="text" name = "alamat">
    <input type="submit">
    </form>
    <h1>Selamat Datang, <?php echo$nama ?></h1>
    <h2>saya tinggal di <?php echo$alamat ?></h2>
</body>
</html>