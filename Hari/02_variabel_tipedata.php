<?php
/**
 * ============================================================
 * HARI 1 - SESI 2: VARIABEL & TIPE DATA
 * ============================================================
 * 
 * KEGUNAAN DI PROYEK:
 * - Menyimpan data pengguna (nama, email)
 * - Menyimpan harga produk
 * - Menyimpan status (aktif/tidak aktif)
 * - Menyimpan konfigurasi aplikasi
 */

echo "<h1>📚 Belajar Variabel & Tipe Data PHP</h1>";

// ============================================================
// 1. VARIABEL - Wadah Penyimpan Data
// ============================================================
echo "<h2>1. Variabel</h2>";

// Aturan penulisan variabel:
// - Dimulai dengan tanda $ (dollar)
// - Setelah $ harus huruf atau underscore
// - Tidak boleh ada spasi
// - Case-sensitive ($nama berbeda dengan $Nama)

$nama = "Budi Santoso";
$umur = 25;
$gaji = 5000000.50;

echo "Nama: $nama <br>";
echo "Umur: $umur tahun <br>";
echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br><br>";

// ============================================================
// 2. TIPE DATA
// ============================================================
echo "<h2>2. Tipe Data PHP</h2>";

// A. STRING - Teks
$nama_produk = "Laptop ASUS ROG";
$deskripsi = 'Laptop gaming dengan RTX 4060';

echo "<strong>String:</strong><br>";
echo "Produk: $nama_produk <br>";
echo "Deskripsi: $deskripsi <br><br>";

// Perbedaan kutip ganda vs tunggal:
$harga = 15000000;
echo "Harga: $harga <br>";      // Output: Harga: 15000000
echo 'Harga: $harga <br><br>';   // Output: Harga: $harga (literal)

// B. INTEGER - Bilangan Bulat
$stok = 50;
$terjual = 25;
$sisa = $stok - $terjual;

echo "<strong>Integer:</strong><br>";
echo "Stok: $stok | Terjual: $terjual | Sisa: $sisa <br><br>";

// C. FLOAT/DOUBLE - Bilangan Desimal
$harga_produk = 1500000.99;
$diskon_persen = 10.5;
$potongan = $harga_produk * ($diskon_persen / 100);
$harga_akhir = $harga_produk - $potongan;

echo "<strong>Float:</strong><br>";
echo "Harga Asli: Rp " . number_format($harga_produk, 2) . "<br>";
echo "Diskon: $diskon_persen% <br>";
echo "Harga Akhir: Rp " . number_format($harga_akhir, 2) . "<br><br>";

// D. BOOLEAN - True/False
$stok_tersedia = true;
$is_member = false;

echo "<strong>Boolean:</strong><br>";
echo "Stok Tersedia: " . ($stok_tersedia ? "Ya" : "Tidak") . "<br>";
echo "Member: " . ($is_member ? "Ya" : "Tidak") . "<br><br>";

// E. NULL - Tidak Ada Nilai
$alamat = null;

echo "<strong>NULL:</strong><br>";
echo "Alamat: " . ($alamat ?? "Belum diisi") . "<br><br>";

// ============================================================
// 3. KONSTANTA - Nilai yang Tidak Berubah
// ============================================================
echo "<h2>3. Konstanta</h2>";

// Menggunakan define()
define("NAMA_APLIKASI", "TokoKu Online");
define("VERSI", "2.0");
define("PPN", 0.11); // 11%

// Menggunakan const (PHP 5.3+)
const MAX_UPLOAD_SIZE = 5242880; // 5MB dalam bytes

echo "Aplikasi: " . NAMA_APLIKASI . " v" . VERSI . "<br>";
echo "PPN: " . (PPN * 100) . "% <br>";
echo "Max Upload: " . (MAX_UPLOAD_SIZE / 1024 / 1024) . " MB <br><br>";

// ============================================================
// 4. TYPE CASTING - Mengubah Tipe Data
// ============================================================
echo "<h2>4. Type Casting</h2>";

$angka_string = "100";
$angka_integer = (int) $angka_string;
$angka_float = (float) "99.99";
$ke_string = (string) 500;
$ke_boolean = (bool) 1;

echo "String ke Integer: " . gettype($angka_integer) . " = $angka_integer <br>";
echo "String ke Float: " . gettype($angka_float) . " = $angka_float <br>";
echo "Integer ke String: " . gettype($ke_string) . " = $ke_string <br>";
echo "Integer ke Boolean: " . gettype($ke_boolean) . " = " . ($ke_boolean ? "true" : "false") . "<br><br>";

// ============================================================
// 5. FUNGSI PENGECEKAN TIPE DATA
// ============================================================
echo "<h2>5. Fungsi Pengecekan Tipe Data</h2>";

$data_test = 42;

echo "var_dump(): ";
var_dump($data_test);
echo "<br>";

echo "gettype(): " . gettype($data_test) . "<br>";
echo "is_int(): " . (is_int($data_test) ? "true" : "false") . "<br>";
echo "is_string(): " . (is_string($data_test) ? "true" : "false") . "<br><br>";

// ============================================================
// CONTOH PROYEK: Data Produk E-Commerce
// ============================================================
echo "<h2>🛒 Contoh Proyek: Data Produk E-Commerce</h2>";
echo "<div style='background: #f5f5f5; padding: 20px; border-radius: 8px;'>";

// Simulasi data produk dari database
$id_produk = 1001;
$nama_produk = "iPhone 15 Pro Max";
$harga = 21999000;
$diskon = 5.0; // persen
$rating = 4.8;
$stok = 15;
$tersedia = $stok > 0; // boolean
$kategori = "Smartphone";
$deskripsi = "Smartphone flagship dengan chip A17 Pro";

// Kalkulasi
$harga_setelah_diskon = $harga - ($harga * $diskon / 100);
$ppn = $harga_setelah_diskon * PPN;
$total_bayar = $harga_setelah_diskon + $ppn;

// Tampilan produk
echo "<h3>$nama_produk</h3>";
echo "<p>ID: #$id_produk | Kategori: $kategori</p>";
echo "<p>$deskripsi</p>";
echo "<p>⭐ $rating / 5.0</p>";
echo "<p><s>Rp " . number_format($harga, 0, ',', '.') . "</s></p>";
echo "<p style='color: red; font-size: 24px;'><strong>Rp " . number_format($harga_setelah_diskon, 0, ',', '.') . "</strong> (-$diskon%)</p>";
echo "<p>+ PPN 11%: Rp " . number_format($ppn, 0, ',', '.') . "</p>";
echo "<p><strong>Total: Rp " . number_format($total_bayar, 0, ',', '.') . "</strong></p>";
echo "<p>Status: " . ($tersedia ? "✅ Stok: $stok unit" : "❌ Habis") . "</p>";

echo "</div>";
?>
