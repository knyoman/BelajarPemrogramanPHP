<?php
/**
 * ============================================================
 * HARI 1 - SESI 3: OPERATOR PHP
 * ============================================================
 * 
 * KEGUNAAN DI PROYEK:
 * - Kalkulasi harga, diskon, pajak
 * - Perbandingan nilai (validasi)
 * - Logika kondisional
 * - Manipulasi string
 */

echo "<h1>📚 Belajar Operator PHP</h1>";

// ============================================================
// 1. OPERATOR ARITMATIKA
// ============================================================
echo "<h2>1. Operator Aritmatika</h2>";

$a = 20;
$b = 6;

echo "a = $a, b = $b <br><br>";

echo "Penjumlahan (a + b): " . ($a + $b) . "<br>";      // 26
echo "Pengurangan (a - b): " . ($a - $b) . "<br>";      // 14
echo "Perkalian (a * b): " . ($a * $b) . "<br>";        // 120
echo "Pembagian (a / b): " . ($a / $b) . "<br>";        // 3.333...
echo "Modulus/Sisa Bagi (a % b): " . ($a % $b) . "<br>"; // 2
echo "Pangkat (a ** 2): " . ($a ** 2) . "<br><br>";     // 400

// Contoh proyek: Kalkulasi belanja
$harga_barang = 150000;
$jumlah = 3;
$subtotal = $harga_barang * $jumlah;
$diskon = $subtotal * 0.1; // 10%
$total = $subtotal - $diskon;

echo "<strong>Contoh: Kalkulasi Belanja</strong><br>";
echo "Harga: Rp " . number_format($harga_barang) . " x $jumlah = Rp " . number_format($subtotal) . "<br>";
echo "Diskon 10%: -Rp " . number_format($diskon) . "<br>";
echo "Total: Rp " . number_format($total) . "<br><br>";

// ============================================================
// 2. OPERATOR ASSIGNMENT (PENUGASAN)
// ============================================================
echo "<h2>2. Operator Assignment</h2>";

$x = 10;
echo "x = $x <br>";

$x += 5;  // x = x + 5
echo "x += 5 → x = $x <br>";

$x -= 3;  // x = x - 3
echo "x -= 3 → x = $x <br>";

$x *= 2;  // x = x * 2
echo "x *= 2 → x = $x <br>";

$x /= 4;  // x = x / 4
echo "x /= 4 → x = $x <br>";

$x %= 3;  // x = x % 3
echo "x %= 3 → x = $x <br><br>";

// ============================================================
// 3. OPERATOR PERBANDINGAN
// ============================================================
echo "<h2>3. Operator Perbandingan</h2>";

$nilai1 = 10;
$nilai2 = "10";
$nilai3 = 20;

echo "nilai1 = 10 (integer), nilai2 = \"10\" (string), nilai3 = 20 <br><br>";

// == : sama nilainya (loose comparison)
echo "(nilai1 == nilai2): " . ($nilai1 == $nilai2 ? "true" : "false") . "<br>";

// === : sama nilai DAN tipe data (strict comparison)
echo "(nilai1 === nilai2): " . ($nilai1 === $nilai2 ? "true" : "false") . "<br>";

// != atau <> : tidak sama
echo "(nilai1 != nilai3): " . ($nilai1 != $nilai3 ? "true" : "false") . "<br>";

// !== : tidak sama nilai ATAU tipe
echo "(nilai1 !== nilai2): " . ($nilai1 !== $nilai2 ? "true" : "false") . "<br>";

// > < >= <=
echo "(nilai1 < nilai3): " . ($nilai1 < $nilai3 ? "true" : "false") . "<br>";
echo "(nilai1 >= 10): " . ($nilai1 >= 10 ? "true" : "false") . "<br>";

// Spaceship operator <=> (PHP 7+)
echo "(nilai1 <=> nilai3): " . ($nilai1 <=> $nilai3) . " (-1 = kurang, 0 = sama, 1 = lebih)<br><br>";

// Contoh proyek: Validasi stok
$stok_tersedia = 5;
$jumlah_pesan = 3;

echo "<strong>Contoh: Validasi Stok</strong><br>";
if ($jumlah_pesan <= $stok_tersedia) {
    echo "✅ Pesanan valid - stok mencukupi<br><br>";
} else {
    echo "❌ Stok tidak mencukupi<br><br>";
}

// ============================================================
// 4. OPERATOR LOGIKA
// ============================================================
echo "<h2>4. Operator Logika</h2>";

$sudah_login = true;
$is_admin = false;
$is_member = true;

echo "sudah_login = true, is_admin = false, is_member = true <br><br>";

// AND (&&) - keduanya harus true
echo "(sudah_login && is_admin): " . ($sudah_login && $is_admin ? "true" : "false") . "<br>";

// OR (||) - salah satu true
echo "(is_admin || is_member): " . ($is_admin || $is_member ? "true" : "false") . "<br>";

// NOT (!) - kebalikan
echo "(!is_admin): " . (!$is_admin ? "true" : "false") . "<br>";

// XOR - hanya satu yang true
echo "(is_admin xor is_member): " . ($is_admin xor $is_member ? "true" : "false") . "<br><br>";

// Contoh proyek: Akses halaman admin
echo "<strong>Contoh: Cek Akses Admin</strong><br>";
$user_login = true;
$role = "admin";
$akun_aktif = true;

if ($user_login && $role === "admin" && $akun_aktif) {
    echo "✅ Akses ke dashboard admin diberikan<br><br>";
} else {
    echo "❌ Akses ditolak<br><br>";
}

// ============================================================
// 5. OPERATOR INCREMENT/DECREMENT
// ============================================================
echo "<h2>5. Operator Increment/Decrement</h2>";

$counter = 5;
echo "counter awal = $counter <br>";

echo "++counter (pre-increment): " . (++$counter) . "<br>"; // Tambah dulu, baru tampilkan
echo "counter sekarang: $counter <br>";

echo "counter++ (post-increment): " . ($counter++) . "<br>"; // Tampilkan dulu, baru tambah
echo "counter sekarang: $counter <br>";

echo "--counter (pre-decrement): " . (--$counter) . "<br>";
echo "counter-- (post-decrement): " . ($counter--) . "<br>";
echo "counter akhir: $counter <br><br>";

// Contoh proyek: Penghitung pengunjung
$pengunjung = 1000;
$pengunjung++; // Tambah satu pengunjung
echo "<strong>Contoh: Penghitung Pengunjung</strong><br>";
echo "Total pengunjung: " . number_format($pengunjung) . "<br><br>";

// ============================================================
// 6. OPERATOR STRING
// ============================================================
echo "<h2>6. Operator String</h2>";

$nama_depan = "Budi";
$nama_belakang = "Santoso";

// Concatenation (penggabungan) dengan titik (.)
$nama_lengkap = $nama_depan . " " . $nama_belakang;
echo "Nama lengkap: $nama_lengkap <br>";

// Concatenation assignment (.=)
$greeting = "Halo, ";
$greeting .= $nama_lengkap;
$greeting .= "! Selamat datang.";
echo $greeting . "<br><br>";

// Contoh proyek: Generate email
$username = "budi.santoso";
$domain = "gmail.com";
$email = $username . "@" . $domain;
echo "<strong>Contoh: Generate Email</strong><br>";
echo "Email: $email <br><br>";

// ============================================================
// 7. OPERATOR TERNARY
// ============================================================
echo "<h2>7. Operator Ternary</h2>";

// Sintaks: kondisi ? nilai_jika_true : nilai_jika_false

$umur = 17;
$status = ($umur >= 18) ? "Dewasa" : "Belum Dewasa";
echo "Umur $umur tahun → Status: $status <br>";

$skor = 85;
$grade = ($skor >= 90) ? "A" : (($skor >= 80) ? "B" : (($skor >= 70) ? "C" : "D"));
echo "Skor $skor → Grade: $grade <br><br>";

// ============================================================
// 8. NULL COALESCING OPERATOR (??)
// ============================================================
echo "<h2>8. Null Coalescing Operator (??)</h2>";

// Mengembalikan nilai pertama jika tidak null
$nama_user = null;
$nama_tampil = $nama_user ?? "Guest";
echo "Nama: $nama_tampil <br>";

// Chaining
$config = null;
$default_config = null;
$final_config = $config ?? $default_config ?? "default_value";
echo "Config: $final_config <br><br>";

// ============================================================
// PROYEK LATIHAN: KALKULATOR BELANJA
// ============================================================
echo "<h2>🛒 Proyek Latihan: Kalkulator Belanja</h2>";
echo "<div style='background: #e8f5e9; padding: 20px; border-radius: 8px;'>";

// Data produk
$nama_produk = "Headphone Sony WH-1000XM5";
$harga_satuan = 4999000;
$qty = 2;

// Membership
$is_member = true;
$member_discount = $is_member ? 0.05 : 0; // Member dapat 5% extra

// Kalkulasi
$subtotal = $harga_satuan * $qty;
$diskon_promo = $subtotal >= 5000000 ? 0.10 : 0.05; // >=5jt dapat 10%, selainnya 5%
$total_diskon_persen = $diskon_promo + $member_discount;
$total_diskon = $subtotal * $total_diskon_persen;
$setelah_diskon = $subtotal - $total_diskon;
$ppn = $setelah_diskon * 0.11; // PPN 11%
$total_bayar = $setelah_diskon + $ppn;

// Tampilan
echo "<h3>$nama_produk</h3>";
echo "<table style='width: 100%;'>";
echo "<tr><td>Harga Satuan</td><td style='text-align:right;'>Rp " . number_format($harga_satuan, 0, ',', '.') . "</td></tr>";
echo "<tr><td>Jumlah</td><td style='text-align:right;'>$qty</td></tr>";
echo "<tr><td>Subtotal</td><td style='text-align:right;'>Rp " . number_format($subtotal, 0, ',', '.') . "</td></tr>";
echo "<tr><td>Status Member</td><td style='text-align:right;'>" . ($is_member ? "✅ Ya" : "❌ Tidak") . "</td></tr>";
echo "<tr style='color: green;'><td>Total Diskon (" . ($total_diskon_persen * 100) . "%)</td><td style='text-align:right;'>- Rp " . number_format($total_diskon, 0, ',', '.') . "</td></tr>";
echo "<tr><td>Setelah Diskon</td><td style='text-align:right;'>Rp " . number_format($setelah_diskon, 0, ',', '.') . "</td></tr>";
echo "<tr><td>PPN 11%</td><td style='text-align:right;'>Rp " . number_format($ppn, 0, ',', '.') . "</td></tr>";
echo "<tr style='font-weight: bold; font-size: 1.2em;'><td>TOTAL BAYAR</td><td style='text-align:right;'>Rp " . number_format($total_bayar, 0, ',', '.') . "</td></tr>";
echo "</table>";

echo "</div>";
?>
