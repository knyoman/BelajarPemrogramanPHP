<?php 
if(isset($_POST['upload'])) {
    $nama_file = $_FILES['foto']['name'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    $folder = "uploads/" .$nama_file;
    
    if(!is_dir("uploads")) {
        mkdir("uploads");
    }
    
    move_uploaded_file($tmp_file, $folder);
    echo "Upload File Sukses!" . $folder;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="nama"><br>
        <input type="text" name="alamat" placeholder="alamat"><br>
        <input type="file" name="foto"><br>
        <button name="upload" type="submit">Upload</button>
    </form>
</body>

</html>