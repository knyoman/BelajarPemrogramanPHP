
 <!-- * ============================================================
 * HARI 1 - SESI 1: PENGENALAN PHP & HELLO WORLD
 * ============================================================
 * 
 * APA ITU PHP?
 * PHP (Hypertext Preprocessor) adalah bahasa pemrograman server-side
 * yang digunakan untuk membuat website dinamis.
 * 
 * KEGUNAAN DI PROYEK:
 * - E-Commerce: Menampilkan produk dari database
 * - Blog: Mengelola artikel dan komentar
 * - Sistem Login: Autentikasi pengguna
 * - Dashboard Admin: Mengelola data secara dinamis
 * <?php ?> Tag pembuka dan penutup di dalam PHP
 *  echo di gunakan untuk menampilkan data user -->




<!-- ============================================================
 * PHP + HTML 
============================================================ -->


<?php 
$nama = "Nyoman";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $nama; ?></h1>
</body>
</html>



 <!-- * ============================================================
 * PHP Enggine & SAPI (Server API)
 * ============================================================
Jenis SAPI yang umum:
- apache2handler → PHP via Apache
- cgi-fcgi → PHP-FPM (server profesional)
- cli → Command Line (cron, script) -->


<?php 
echo php_sapi_name();
?>


 <!-- * ============================================================
 * PHP Di Exsekusi Dari Atas Ke Bawah
 * ============================================================ -->


<?php 
echo $nama1;
$nama1 = "Nyoman"; // salah 
?>



<!-- ===========================================================
 * PHP Tag Pendek(short tag) jangan di pakai 
 - Short tag bisa di matikan server
 - Produck server sering tidak mendukung
============================================================ -->

<!-- 
Tag pendek  -->
<? echo "Hallo"; ?>
<!-- Tag panjang  -->
<?php echo "Hallo"; ?>



 <!-- ============================================================
 Output Buffering
 ============================================================
- Urutan internal php 
1. ob_start(); -> PHP aktifkan penampungan output
2. echo -> masuk buffer, bukan ke browser
3. ob_end_flush(); -> buffer dikirim ke browser -->
<!-- 
echo "<br>";

<?php
ob_start();
echo "Halo Dunia";
ob_end_flush();
?> -->


 <!-- * ============================================================
 * Variabel PHP ≠ KOTAK SEDERHANA
 * ============================================================ 
$a = 5 -> a dalaah kotak berisi 5 salah
       -> $a adalah label yang menunjuk ke memory
-->

<?php 
echo "<br>";

$a = 5;
$b = $a;
$b = 10;
echo $b; 
?> 
