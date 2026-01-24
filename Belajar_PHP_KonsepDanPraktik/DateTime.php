<?php 

echo date('d-m-y') ."<br>";
echo date('D, d M Y') ."<br>";

echo date("H:i:s") ."<br>";
echo date_default_timezone_get();

echo "<br>";
date_default_timezone_set("Asia/Jakarta");
echo date("H:i:s") ."<br>";
echo date_default_timezone_get();


?>