<!-- Latihan 1  -->

<!-- kode yang menggunakan Buffering -->

<?php
ob_start();
echo "Halo Dunia";
ob_end_flush();
?>

<!-- kode yang tidak menggunakan Buffering -->

<?php
echo "Halo Dunia";
?>



<!-- Latihan 2 -->

<!-- <?php 
echo "Halo";
header("Location: latihan1.php"); 
?> -->

<?php
ob_start();
echo "Halo";
header("Location: latihan1.php");
exit;
ob_end_flush();
?>
