<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi</title>
</head>

<body>
    <form method="POST">
        <input type="text" placeholder="nama" name="nama">
        <input type="text" placeholder="alamat" name="alamat">
        <input type="submit">
    </form>
    <?php 
    if(isset($_POST['nama']) || empty($_POST['alamat'])){
        if(empty($_POST['nama'])){
            echo 'nama atau alamat harus di isi!!';
        }else{
            echo "Halo!" . $_POST['nama'];
        }
    }
?>
</body>

</html>