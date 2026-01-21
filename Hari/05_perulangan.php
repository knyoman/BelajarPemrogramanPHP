<?php
/**
 * ============================================================
 * HARI 1 - SESI 5: PERULANGAN (LOOPS)
 * ============================================================
 * 
 * KEGUNAAN DI PROYEK:
 * - Menampilkan daftar produk dari database
 * - Render tabel data
 * - Proses batch (email massal, export data)
 * - Pagination
 */

echo "<h1>📚 Belajar Perulangan PHP</h1>";

// ============================================================
// 1. FOR LOOP
// ============================================================
echo "<h2>1. FOR Loop</h2>";

// Sintaks: for (init; kondisi; increment) { kode }

echo "Hitungan 1 sampai 5: ";
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}
echo "<br><br>";

// Hitungan mundur
echo "Hitungan mundur 5 ke 1: ";
for ($i = 5; $i >= 1; $i--) {
    echo "$i ";
}
echo "<br><br>";

// Lompat per 2
echo "Bilangan genap 2-10: ";
for ($i = 2; $i <= 10; $i += 2) {
    echo "$i ";
}
echo "<br><br>";

// Contoh proyek: Tabel perkalian
echo "<strong>Contoh: Tabel Perkalian</strong><br>";
$angka = 7;
echo "<table style='border-collapse: collapse;'>";
for ($i = 1; $i <= 10; $i++) {
    $hasil = $angka * $i;
    echo "<tr>";
    echo "<td style='border: 1px solid #ddd; padding: 5px;'>$angka × $i</td>";
    echo "<td style='border: 1px solid #ddd; padding: 5px;'>= $hasil</td>";
    echo "</tr>";
}
echo "</table><br>";

// ============================================================
// 2. WHILE LOOP
// ============================================================
echo "<h2>2. WHILE Loop</h2>";

// While: eksekusi selama kondisi true

$counter = 1;
echo "While loop 1-5: ";
while ($counter <= 5) {
    echo "$counter ";
    $counter++;
}
echo "<br><br>";

// Contoh proyek: Simulasi baca data (misalnya dari file/database)
echo "<strong>Contoh: Simulasi Baca Data</strong><br>";
$baris = 1;
$max_baris = 3;

echo "<ul>";
while ($baris <= $max_baris) {
    echo "<li>Data baris ke-$baris dari database</li>";
    $baris++;
}
echo "</ul><br>";

// ============================================================
// 3. DO-WHILE LOOP
// ============================================================
echo "<h2>3. DO-WHILE Loop</h2>";

// Do-while: minimal eksekusi 1 kali, baru cek kondisi

$angka = 1;
echo "Do-while 1-3: ";
do {
    echo "$angka ";
    $angka++;
} while ($angka <= 3);
echo "<br><br>";

// Contoh: Validasi input (simulasi)
echo "<strong>Contoh: Simulasi Validasi Input</strong><br>";
$attempts = 0;
$max_attempts = 3;
$password_benar = "rahasia123";
$password_input = ["salah1", "salah2", "rahasia123"]; // Simulasi input user

do {
    $current_password = $password_input[$attempts];
    $attempts++;
    
    if ($current_password === $password_benar) {
        echo "✅ Percobaan $attempts: Password benar! Login berhasil.<br>";
        break;
    } else {
        echo "❌ Percobaan $attempts: Password salah.<br>";
    }
} while ($attempts < $max_attempts);

if ($attempts >= $max_attempts && $current_password !== $password_benar) {
    echo "🚫 Akun terkunci karena terlalu banyak percobaan.<br>";
}
echo "<br>";

// ============================================================
// 4. FOREACH LOOP
// ============================================================
echo "<h2>4. FOREACH Loop</h2>";

// Foreach: khusus untuk array dan objek

// Array indexed
$buah = ["Apel", "Mangga", "Jeruk", "Anggur", "Pisang"];

echo "<strong>Daftar Buah:</strong><br>";
echo "<ul>";
foreach ($buah as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

// Array dengan index
echo "<strong>Dengan Index:</strong><br>";
echo "<ol start='0'>";
foreach ($buah as $index => $item) {
    echo "<li value='$index'>[$index] $item</li>";
}
echo "</ol>";

// Array associative
$siswa = [
    "nama" => "Budi Santoso",
    "nim" => "2024001",
    "jurusan" => "Teknik Informatika",
    "semester" => 3,
    "ipk" => 3.75
];

echo "<strong>Data Siswa (Associative Array):</strong><br>";
echo "<table style='border-collapse: collapse;'>";
foreach ($siswa as $key => $value) {
    echo "<tr>";
    echo "<td style='border: 1px solid #ddd; padding: 8px; font-weight: bold;'>" . ucfirst($key) . "</td>";
    echo "<td style='border: 1px solid #ddd; padding: 8px;'>$value</td>";
    echo "</tr>";
}
echo "</table><br>";

// ============================================================
// 5. BREAK & CONTINUE
// ============================================================
echo "<h2>5. BREAK & CONTINUE</h2>";

// BREAK: keluar dari loop
echo "<strong>Break - Berhenti saat ketemu angka 5:</strong><br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "(STOP)";
        break;
    }
    echo "$i ";
}
echo "<br><br>";

// CONTINUE: skip iterasi saat ini
echo "<strong>Continue - Skip angka genap:</strong><br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue; // Skip angka genap
    }
    echo "$i ";
}
echo "<br><br>";

// Contoh proyek: Cari produk
echo "<strong>Contoh: Mencari Produk</strong><br>";
$produk_list = [
    ["id" => 1, "nama" => "Laptop", "harga" => 15000000],
    ["id" => 2, "nama" => "Mouse", "harga" => 250000],
    ["id" => 3, "nama" => "Keyboard", "harga" => 500000],
    ["id" => 4, "nama" => "Monitor", "harga" => 3000000],
];

$cari_id = 3;
$produk_ditemukan = null;

foreach ($produk_list as $produk) {
    if ($produk["id"] == $cari_id) {
        $produk_ditemukan = $produk;
        break; // Stop pencarian jika sudah ketemu
    }
}

if ($produk_ditemukan) {
    echo "Produk ditemukan: " . $produk_ditemukan["nama"] . " - Rp " . number_format($produk_ditemukan["harga"]) . "<br><br>";
} else {
    echo "Produk tidak ditemukan<br><br>";
}

// ============================================================
// 6. NESTED LOOPS
// ============================================================
echo "<h2>6. Nested Loops</h2>";

echo "<strong>Contoh: Tabel Perkalian 1-5</strong><br>";
echo "<table style='border-collapse: collapse;'>";
echo "<tr><th style='border: 1px solid #ddd; padding: 8px; background: #2c3e50; color: white;'>×</th>";
for ($i = 1; $i <= 5; $i++) {
    echo "<th style='border: 1px solid #ddd; padding: 8px; background: #2c3e50; color: white;'>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    echo "<th style='border: 1px solid #ddd; padding: 8px; background: #34495e; color: white;'>$i</th>";
    for ($j = 1; $j <= 5; $j++) {
        $hasil = $i * $j;
        echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: center;'>$hasil</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// ============================================================
// PROYEK LATIHAN: DISPLAY KATALOG PRODUK
// ============================================================
echo "<h2>🛒 Proyek Latihan: Katalog Produk E-Commerce</h2>";

$katalog = [
    [
        "id" => 1,
        "nama" => "iPhone 15 Pro Max",
        "kategori" => "Smartphone",
        "harga" => 21999000,
        "stok" => 10,
        "rating" => 4.9,
        "sold" => 150
    ],
    [
        "id" => 2,
        "nama" => "MacBook Air M3",
        "kategori" => "Laptop",
        "harga" => 18999000,
        "stok" => 5,
        "rating" => 4.8,
        "sold" => 75
    ],
    [
        "id" => 3,
        "nama" => "AirPods Pro 2",
        "kategori" => "Audio",
        "harga" => 3999000,
        "stok" => 0,
        "rating" => 4.7,
        "sold" => 500
    ],
    [
        "id" => 4,
        "nama" => "iPad Pro 12.9",
        "kategori" => "Tablet",
        "harga" => 17999000,
        "stok" => 8,
        "rating" => 4.9,
        "sold" => 200
    ],
    [
        "id" => 5,
        "nama" => "Apple Watch Ultra 2",
        "kategori" => "Wearable",
        "harga" => 14999000,
        "stok" => 3,
        "rating" => 4.6,
        "sold" => 85
    ],
];

echo "<div style='display: flex; flex-wrap: wrap; gap: 15px;'>";

foreach ($katalog as $produk) {
    // Skip produk yang stoknya habis
    $stok_habis = $produk['stok'] == 0;
    
    echo "<div style='
        width: 250px; 
        border: 1px solid #ddd; 
        border-radius: 12px; 
        padding: 15px;
        background: " . ($stok_habis ? "#f5f5f5" : "white") . ";
        opacity: " . ($stok_habis ? "0.7" : "1") . ";
    '>";
    
    echo "<span style='background: #3498db; color: white; padding: 3px 8px; border-radius: 4px; font-size: 12px;'>" . $produk['kategori'] . "</span>";
    echo "<h3 style='margin: 10px 0;'>" . $produk['nama'] . "</h3>";
    echo "<p style='color: #e74c3c; font-size: 20px; font-weight: bold;'>Rp " . number_format($produk['harga'], 0, ',', '.') . "</p>";
    
    // Rating stars
    echo "<p>⭐ " . $produk['rating'] . " | Terjual " . $produk['sold'] . "</p>";
    
    // Status stok
    if ($stok_habis) {
        echo "<button style='width: 100%; padding: 10px; background: #bdc3c7; color: white; border: none; border-radius: 8px;' disabled>Stok Habis</button>";
    } else {
        echo "<p style='color: green;'>✅ Stok: " . $produk['stok'] . " unit</p>";
        echo "<button style='width: 100%; padding: 10px; background: #27ae60; color: white; border: none; border-radius: 8px; cursor: pointer;'>+ Keranjang</button>";
    }
    
    echo "</div>";
}

echo "</div>";

// Statistik
echo "<br><div style='background: #e8f5e9; padding: 15px; border-radius: 8px;'>";
echo "<h3>📊 Statistik Katalog</h3>";

$total_produk = count($katalog);
$total_stok = 0;
$total_nilai = 0;
$produk_tersedia = 0;

foreach ($katalog as $produk) {
    $total_stok += $produk['stok'];
    $total_nilai += $produk['harga'] * $produk['stok'];
    if ($produk['stok'] > 0) {
        $produk_tersedia++;
    }
}

echo "<p>Total Jenis Produk: $total_produk</p>";
echo "<p>Produk Tersedia: $produk_tersedia</p>";
echo "<p>Total Unit Stok: $total_stok</p>";
echo "<p>Total Nilai Inventaris: Rp " . number_format($total_nilai, 0, ',', '.') . "</p>";
echo "</div>";
?>
