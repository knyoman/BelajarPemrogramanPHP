<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>

<body>
    <h1>Hasil Inputan Form Biodata</h1>
    <h3>Selamat Datang, <?php echo $_POST['nama']; ?></h3>
    <h3>Alamat kamu di, <?php echo $_POST['alamat']; ?></h3>
</body>

</html>