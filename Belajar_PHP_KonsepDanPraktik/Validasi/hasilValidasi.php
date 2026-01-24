<?php 
    if(isset($_POST['nama'])){
        if(empty($_POST['nama'])){
            echo '<p>Nama tidak boleh kosong</p>';
        }else{
            echo "Halo!" . $_POST['nama'];
        }
    }
?>