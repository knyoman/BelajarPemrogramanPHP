<?php
/**
 * ============================================================
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
 */

// ============================================================
// 1. TAG PHP - Pembuka dan Penutup
// ============================================================
// PHP selalu dimulai dengan <?php dan diakhiri dengan ?>
// Jika file hanya berisi PHP, penutup ?> boleh dihilangkan

// ============================================================
// 2. ECHO - Menampilkan Output
// ============================================================

echo "Selamat datang di PHP!";
echo "<br>"; // <br> adalah HTML untuk baris baru

// Echo bisa menampilkan HTML
echo "<h1>Ini adalah Heading</h1>";
echo "<p style='color: blue;'>Ini paragraf berwarna biru</p>";

// ============================================================
// 3. PRINT - Alternatif Echo
// ============================================================

print "Ini menggunakan print";
echo "<br>";

// Perbedaan echo vs print:
// - echo lebih cepat (tidak return value)
// - print return value 1 (bisa digunakan dalam expression)

// ============================================================
// 4. KOMENTAR - Documentasi Kode
// ============================================================

// Ini komentar satu baris

/* 
   Ini komentar
   multi-baris
*/

/**
 * Ini DocBlock - standar dokumentasi profesional
 * Digunakan untuk menjelaskan fungsi, class, dll
 */

// ============================================================
// CONTOH PENGGUNAAN DI PROYEK: Header Website
// ============================================================
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Toko Online</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header { background: #2c3e50; color: white; padding: 20px; }
        .content { padding: 20px; background: #ecf0f1; margin-top: 10px; }
    </style>
</head>
<body>

<div class="header">
    <?php
    // Dalam proyek nyata, data ini bisa dari database
    $nama_toko = "Toko Elektronik Jaya";
    $slogan = "Kualitas Terbaik, Harga Bersahabat";
    
    echo "<h1>$nama_toko</h1>";
    echo "<p>$slogan</p>";
    ?>
</div>

<div class="content">
    <?php
    echo "<h2>Selamat Datang!</h2>";
    echo "<p>Hari ini tanggal: " . date("d F Y") . "</p>";
    echo "<p>Waktu server: " . date("H:i:s") . "</p>";
    ?>
</div>

</body>
</html>
