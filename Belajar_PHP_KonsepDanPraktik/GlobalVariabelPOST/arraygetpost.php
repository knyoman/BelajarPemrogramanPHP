<?php 

print_r($_POST);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing Array</title>
</head>

<body>
    <h2>Form Biodata</h2>
    <form action="" method="POST">
        <input type="text" name="nama" placeholder="Nama User"><br>
        <input type="text" name="alamat" placeholder="Alamat User"><br>
        <select name="jurusan" id="">
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>