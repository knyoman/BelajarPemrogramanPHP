<?php
/**
 * ============================================================
 * HARI 1 - SESI 4: STRUKTUR KONTROL (PERCABANGAN)
 * ============================================================
 * 
 * KEGUNAAN DI PROYEK:
 * - Validasi input user
 * - Menentukan level akses
 * - Menampilkan konten berdasarkan kondisi
 * - Logika bisnis (diskon, status pesanan, dll)
 */

echo "<h1>📚 Belajar Struktur Kontrol PHP</h1>";

// ============================================================
// 1. IF STATEMENT
// ============================================================
echo "<h2>1. IF Statement</h2>";

$umur = 25;

// IF sederhana
if ($umur >= 18) {
    echo "Anda sudah dewasa (umur: $umur tahun)<br><br>";
}

// Contoh proyek: Cek stok produk
$stok = 5;
echo "<strong>Contoh: Cek Stok</strong><br>";
if ($stok > 0) {
    echo "✅ Produk tersedia ($stok unit)<br><br>";
}

// ============================================================
// 2. IF-ELSE STATEMENT
// ============================================================
echo "<h2>2. IF-ELSE Statement</h2>";

$saldo = 50000;
$harga_produk = 75000;

echo "Saldo: Rp " . number_format($saldo) . ", Harga: Rp " . number_format($harga_produk) . "<br>";

if ($saldo >= $harga_produk) {
    echo "✅ Saldo mencukupi, transaksi dapat dilanjutkan<br><br>";
} else {
    $kekurangan = $harga_produk - $saldo;
    echo "❌ Saldo tidak cukup! Kekurangan: Rp " . number_format($kekurangan) . "<br><br>";
}

// ============================================================
// 3. IF-ELSEIF-ELSE STATEMENT
// ============================================================
echo "<h2>3. IF-ELSEIF-ELSE Statement</h2>";

$nilai = 85;

echo "Nilai: $nilai <br>";

if ($nilai >= 90) {
    $grade = "A";
    $keterangan = "Sangat Baik";
} elseif ($nilai >= 80) {
    $grade = "B";
    $keterangan = "Baik";
} elseif ($nilai >= 70) {
    $grade = "C";
    $keterangan = "Cukup";
} elseif ($nilai >= 60) {
    $grade = "D";
    $keterangan = "Kurang";
} else {
    $grade = "E";
    $keterangan = "Sangat Kurang";
}

echo "Grade: $grade ($keterangan)<br><br>";

// Contoh proyek: Level membership
$total_belanja = 15000000; // Total belanja selama setahun

echo "<strong>Contoh: Penentuan Level Member</strong><br>";
echo "Total Belanja: Rp " . number_format($total_belanja) . "<br>";

if ($total_belanja >= 50000000) {
    $level = "PLATINUM";
    $diskon = 20;
    $emoji = "💎";
} elseif ($total_belanja >= 25000000) {
    $level = "GOLD";
    $diskon = 15;
    $emoji = "🥇";
} elseif ($total_belanja >= 10000000) {
    $level = "SILVER";
    $diskon = 10;
    $emoji = "🥈";
} elseif ($total_belanja >= 5000000) {
    $level = "BRONZE";
    $diskon = 5;
    $emoji = "🥉";
} else {
    $level = "REGULAR";
    $diskon = 0;
    $emoji = "👤";
}

echo "Level Member: $emoji $level (Diskon: $diskon%)<br><br>";

// ============================================================
// 4. NESTED IF (IF BERSARANG)
// ============================================================
echo "<h2>4. Nested IF</h2>";

$user_login = true;
$role = "admin";
$akun_aktif = true;

echo "<strong>Contoh: Validasi Akses Multi-Level</strong><br>";

if ($user_login) {
    echo "✓ User sudah login<br>";
    
    if ($akun_aktif) {
        echo "✓ Akun aktif<br>";
        
        if ($role === "admin") {
            echo "✓ Role: Admin<br>";
            echo "🔓 Akses ke Dashboard Admin diberikan!<br><br>";
        } elseif ($role === "editor") {
            echo "✓ Role: Editor<br>";
            echo "🔓 Akses ke halaman konten diberikan!<br><br>";
        } else {
            echo "✓ Role: User biasa<br>";
            echo "🔓 Akses ke profil user diberikan!<br><br>";
        }
    } else {
        echo "❌ Akun tidak aktif, silakan verifikasi email<br><br>";
    }
} else {
    echo "❌ Silakan login terlebih dahulu<br><br>";
}

// ============================================================
// 5. SWITCH STATEMENT
// ============================================================
echo "<h2>5. SWITCH Statement</h2>";

$hari = date("l"); // Nama hari dalam bahasa Inggris

echo "Hari ini: $hari <br>";

switch ($hari) {
    case "Monday":
        echo "Semangat! Awal minggu yang produktif 💪<br><br>";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "Tetap fokus dan produktif! 📚<br><br>";
        break;
    case "Friday":
        echo "TGIF! Tinggal sedikit lagi ke weekend 🎉<br><br>";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend! Waktunya istirahat 🏖️<br><br>";
        break;
    default:
        echo "Hari tidak valid<br><br>";
}

// Contoh proyek: Status Pesanan
$status_pesanan = "shipped";

echo "<strong>Contoh: Status Pesanan E-Commerce</strong><br>";
echo "Status Code: $status_pesanan <br>";

switch ($status_pesanan) {
    case "pending":
        $icon = "⏳";
        $pesan = "Menunggu pembayaran";
        $warna = "#f39c12";
        break;
    case "paid":
        $icon = "💳";
        $pesan = "Pembayaran diterima, menunggu diproses";
        $warna = "#3498db";
        break;
    case "processing":
        $icon = "📦";
        $pesan = "Pesanan sedang diproses";
        $warna = "#9b59b6";
        break;
    case "shipped":
        $icon = "🚚";
        $pesan = "Pesanan dalam perjalanan";
        $warna = "#e67e22";
        break;
    case "delivered":
        $icon = "✅";
        $pesan = "Pesanan telah sampai";
        $warna = "#27ae60";
        break;
    case "cancelled":
        $icon = "❌";
        $pesan = "Pesanan dibatalkan";
        $warna = "#e74c3c";
        break;
    default:
        $icon = "❓";
        $pesan = "Status tidak diketahui";
        $warna = "#95a5a6";
}

echo "<div style='background: $warna; color: white; padding: 15px; border-radius: 8px; display: inline-block;'>";
echo "<span style='font-size: 24px;'>$icon</span> $pesan";
echo "</div><br><br>";

// ============================================================
// 6. MATCH EXPRESSION (PHP 8+)
// ============================================================
echo "<h2>6. MATCH Expression (PHP 8+)</h2>";

$http_code = 404;

// Match adalah alternatif switch yang lebih ringkas
$message = match($http_code) {
    200 => "OK - Sukses",
    201 => "Created - Berhasil dibuat",
    400 => "Bad Request - Permintaan tidak valid",
    401 => "Unauthorized - Tidak terautentikasi",
    403 => "Forbidden - Akses ditolak",
    404 => "Not Found - Halaman tidak ditemukan",
    500 => "Internal Server Error",
    default => "Unknown Status Code"
};

echo "HTTP $http_code: $message<br><br>";

// ============================================================
// PROYEK LATIHAN: SISTEM PENILAIAN SISWA
// ============================================================
echo "<h2>📝 Proyek Latihan: Sistem Penilaian Siswa</h2>";
echo "<div style='background: #fff3e0; padding: 20px; border-radius: 8px;'>";

// Data siswa
$nama_siswa = "Ahmad Rizki";
$nilai_tugas = 85;
$nilai_uts = 78;
$nilai_uas = 82;
$kehadiran = 95; // persen

// Hitung nilai akhir
$nilai_akhir = ($nilai_tugas * 0.3) + ($nilai_uts * 0.3) + ($nilai_uas * 0.4);

// Tentukan grade
if ($nilai_akhir >= 90 && $kehadiran >= 80) {
    $grade = "A";
    $predikat = "Sangat Baik";
} elseif ($nilai_akhir >= 80 && $kehadiran >= 75) {
    $grade = "B";
    $predikat = "Baik";
} elseif ($nilai_akhir >= 70 && $kehadiran >= 70) {
    $grade = "C";
    $predikat = "Cukup";
} elseif ($nilai_akhir >= 60 && $kehadiran >= 60) {
    $grade = "D";
    $predikat = "Kurang";
} else {
    $grade = "E";
    $predikat = "Tidak Lulus";
}

// Status kelulusan
$lulus = ($nilai_akhir >= 60 && $kehadiran >= 60);

// Tampilan
echo "<h3>Rapor Siswa: $nama_siswa</h3>";
echo "<table style='width: 100%; border-collapse: collapse;'>";
echo "<tr><td style='border: 1px solid #ddd; padding: 8px;'>Nilai Tugas (30%)</td><td style='border: 1px solid #ddd; padding: 8px; text-align: right;'>$nilai_tugas</td></tr>";
echo "<tr><td style='border: 1px solid #ddd; padding: 8px;'>Nilai UTS (30%)</td><td style='border: 1px solid #ddd; padding: 8px; text-align: right;'>$nilai_uts</td></tr>";
echo "<tr><td style='border: 1px solid #ddd; padding: 8px;'>Nilai UAS (40%)</td><td style='border: 1px solid #ddd; padding: 8px; text-align: right;'>$nilai_uas</td></tr>";
echo "<tr><td style='border: 1px solid #ddd; padding: 8px;'>Kehadiran</td><td style='border: 1px solid #ddd; padding: 8px; text-align: right;'>$kehadiran%</td></tr>";
echo "<tr style='font-weight: bold; background: #e3f2fd;'><td style='border: 1px solid #ddd; padding: 8px;'>Nilai Akhir</td><td style='border: 1px solid #ddd; padding: 8px; text-align: right;'>" . number_format($nilai_akhir, 2) . "</td></tr>";
echo "<tr style='font-weight: bold;'><td style='border: 1px solid #ddd; padding: 8px;'>Grade</td><td style='border: 1px solid #ddd; padding: 8px; text-align: right;'>$grade ($predikat)</td></tr>";
echo "</table>";

echo "<br><div style='padding: 10px; border-radius: 5px; " . ($lulus ? "background: #c8e6c9;" : "background: #ffcdd2;") . "'>";
echo $lulus ? "🎓 STATUS: LULUS" : "⚠️ STATUS: TIDAK LULUS";
echo "</div>";

echo "</div>";
?>
