<?php 
$nilai = "A";

switch($nilai){
    case "A":
        echo "Nilai kamu sangat bagus";
        break;
    case "B":
        echo "Nilai kamu bagus";
        break;
    case "C":
        echo "Nilai kamu cukup";
        break;
    default:
    echo "Nilai tidak ada di databases";
    break;
}

?>