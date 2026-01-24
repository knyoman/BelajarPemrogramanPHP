<?php 

$umur = 11;
$status = "Pengangguran";

if($umur <= 17 ){
    if($status == "Pelajar"){
        echo "Diskon 50%";
    }else{
        echo "Diskon 30%";
    }
}else{
    echo "Tidak dapat diskon";
}

?>