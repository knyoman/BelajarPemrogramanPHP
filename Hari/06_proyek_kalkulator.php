<?php
/**
 * ============================================================
 * HARI 1 - PROYEK AKHIR: KALKULATOR INTERAKTIF
 * ============================================================
 * 
 * Proyek ini menggabungkan semua yang dipelajari di Hari 1:
 * - Variabel & Tipe Data
 * - Operator
 * - Struktur Kontrol
 * - Perulangan
 * 
 * FITUR:
 * 1. Kalkulator Dasar (Tambah, Kurang, Kali, Bagi)
 * 2. Kalkulator Diskon & PPN
 * 3. Kalkulator BMI
 * 4. Konverter Suhu
 * 5. Tabel Perkalian Generator
 */

// Ambil input dari form
$operasi = $_GET['operasi'] ?? 'dasar';
$angka1 = isset($_GET['angka1']) ? (float) $_GET['angka1'] : 0;
$angka2 = isset($_GET['angka2']) ? (float) $_GET['angka2'] : 0;
$operator = $_GET['operator'] ?? '+';

// Variabel untuk hasil
$hasil = null;
$error = null;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🧮 Kalkulator PHP Interaktif</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: white;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
            justify-content: center;
        }
        .tab-btn {
            padding: 12px 24px;
            background: rgba(255,255,255,0.2);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s;
        }
        .tab-btn:hover, .tab-btn.active {
            background: white;
            color: #667eea;
        }
        .calculator-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input:focus, select:focus {
            border-color: #667eea;
            outline: none;
        }
        button[type="submit"] {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.5);
        }
        .result-box {
            margin-top: 20px;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            text-align: center;
        }
        .result-box h3 {
            color: #333;
            margin-bottom: 10px;
        }
        .result-value {
            font-size: 32px;
            font-weight: 700;
            color: #667eea;
        }
        .error {
            background: #ffe6e6;
            color: #c0392b;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .success {
            background: #e6ffe6;
            color: #27ae60;
        }
        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #667eea;
            color: white;
        }
        tr:nth-child(even) {
            background: #f5f5f5;
        }
        .info-box {
            background: #e3f2fd;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 4px solid #2196f3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>🧮 Kalkulator PHP Interaktif</h1>
    
    <!-- Navigation Tabs -->
    <div class="tabs">
        <a href="?operasi=dasar" class="tab-btn <?= $operasi == 'dasar' ? 'active' : '' ?>">➕ Dasar</a>
        <a href="?operasi=belanja" class="tab-btn <?= $operasi == 'belanja' ? 'active' : '' ?>">🛒 Belanja</a>
        <a href="?operasi=bmi" class="tab-btn <?= $operasi == 'bmi' ? 'active' : '' ?>">⚖️ BMI</a>
        <a href="?operasi=suhu" class="tab-btn <?= $operasi == 'suhu' ? 'active' : '' ?>">🌡️ Suhu</a>
        <a href="?operasi=perkalian" class="tab-btn <?= $operasi == 'perkalian' ? 'active' : '' ?>">✖️ Tabel</a>
    </div>
    
    <div class="calculator-card">
        
        <?php
        // ============================================================
        // 1. KALKULATOR DASAR
        // ============================================================
        if ($operasi == 'dasar'):
        ?>
        <div class="info-box">
            <strong>📚 Konsep yang digunakan:</strong> Variabel, Operator Aritmatika, Switch Statement
        </div>
        
        <form method="GET">
            <input type="hidden" name="operasi" value="dasar">
            
            <div class="grid-2">
                <div class="form-group">
                    <label>Angka Pertama</label>
                    <input type="number" name="angka1" step="any" value="<?= $angka1 ?>" placeholder="Masukkan angka">
                </div>
                <div class="form-group">
                    <label>Angka Kedua</label>
                    <input type="number" name="angka2" step="any" value="<?= $angka2 ?>" placeholder="Masukkan angka">
                </div>
            </div>
            
            <div class="form-group">
                <label>Operator</label>
                <select name="operator">
                    <option value="+" <?= $operator == '+' ? 'selected' : '' ?>>+ (Tambah)</option>
                    <option value="-" <?= $operator == '-' ? 'selected' : '' ?>>- (Kurang)</option>
                    <option value="*" <?= $operator == '*' ? 'selected' : '' ?>>× (Kali)</option>
                    <option value="/" <?= $operator == '/' ? 'selected' : '' ?>>÷ (Bagi)</option>
                    <option value="%" <?= $operator == '%' ? 'selected' : '' ?>>% (Modulus)</option>
                    <option value="**" <?= $operator == '**' ? 'selected' : '' ?>>^ (Pangkat)</option>
                </select>
            </div>
            
            <button type="submit">Hitung</button>
        </form>
        
        <?php
        // Proses perhitungan
        if (isset($_GET['angka1']) && isset($_GET['angka2'])):
            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    $simbol = '+';
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    $simbol = '-';
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    $simbol = '×';
                    break;
                case '/':
                    if ($angka2 == 0) {
                        $error = "Tidak bisa membagi dengan nol!";
                    } else {
                        $hasil = $angka1 / $angka2;
                    }
                    $simbol = '÷';
                    break;
                case '%':
                    if ($angka2 == 0) {
                        $error = "Tidak bisa modulus dengan nol!";
                    } else {
                        $hasil = $angka1 % $angka2;
                    }
                    $simbol = '%';
                    break;
                case '**':
                    $hasil = $angka1 ** $angka2;
                    $simbol = '^';
                    break;
            }
            
            if ($error): ?>
                <div class="result-box error"><?= $error ?></div>
            <?php elseif ($hasil !== null): ?>
                <div class="result-box">
                    <h3><?= $angka1 ?> <?= $simbol ?> <?= $angka2 ?> =</h3>
                    <div class="result-value"><?= number_format($hasil, 4) ?></div>
                </div>
            <?php endif;
        endif;
        endif;
        
        // ============================================================
        // 2. KALKULATOR BELANJA
        // ============================================================
        if ($operasi == 'belanja'):
            $harga = isset($_GET['harga']) ? (float) $_GET['harga'] : 0;
            $qty = isset($_GET['qty']) ? (int) $_GET['qty'] : 1;
            $diskon = isset($_GET['diskon']) ? (float) $_GET['diskon'] : 0;
            $is_member = isset($_GET['member']) ? true : false;
        ?>
        <div class="info-box">
            <strong>📚 Konsep yang digunakan:</strong> Variabel, Operator, IF-ELSE, Ternary Operator
        </div>
        
        <form method="GET">
            <input type="hidden" name="operasi" value="belanja">
            
            <div class="grid-2">
                <div class="form-group">
                    <label>Harga Satuan (Rp)</label>
                    <input type="number" name="harga" value="<?= $harga ?>" placeholder="Contoh: 150000">
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="qty" value="<?= $qty ?>" min="1">
                </div>
            </div>
            
            <div class="grid-2">
                <div class="form-group">
                    <label>Diskon (%)</label>
                    <input type="number" name="diskon" value="<?= $diskon ?>" min="0" max="100">
                </div>
                <div class="form-group">
                    <label>Member?</label>
                    <select name="member">
                        <option value="">Tidak</option>
                        <option value="1" <?= $is_member ? 'selected' : '' ?>>Ya (+5% diskon)</option>
                    </select>
                </div>
            </div>
            
            <button type="submit">Hitung Total</button>
        </form>
        
        <?php if ($harga > 0):
            $subtotal = $harga * $qty;
            $total_diskon_persen = $diskon + ($is_member ? 5 : 0);
            $potongan_diskon = $subtotal * ($total_diskon_persen / 100);
            $setelah_diskon = $subtotal - $potongan_diskon;
            $ppn = $setelah_diskon * 0.11;
            $total = $setelah_diskon + $ppn;
        ?>
        <div class="result-box">
            <h3>Rincian Belanja</h3>
            <table>
                <tr><td>Subtotal</td><td style="text-align:right;"><?= "Rp " . number_format($subtotal, 0, ',', '.') ?></td></tr>
                <tr style="color: green;"><td>Diskon <?= $total_diskon_persen ?>%</td><td style="text-align:right;">- <?= "Rp " . number_format($potongan_diskon, 0, ',', '.') ?></td></tr>
                <tr><td>Setelah Diskon</td><td style="text-align:right;"><?= "Rp " . number_format($setelah_diskon, 0, ',', '.') ?></td></tr>
                <tr><td>PPN 11%</td><td style="text-align:right;">+ <?= "Rp " . number_format($ppn, 0, ',', '.') ?></td></tr>
                <tr style="font-weight: bold; font-size: 1.2em;"><td>TOTAL</td><td style="text-align:right;"><?= "Rp " . number_format($total, 0, ',', '.') ?></td></tr>
            </table>
            <?php if ($is_member): ?>
            <p style="color: green; margin-top: 10px;">🎁 Anda mendapat diskon member +5%!</p>
            <?php endif; ?>
        </div>
        <?php endif;
        endif;
        
        // ============================================================
        // 3. KALKULATOR BMI
        // ============================================================
        if ($operasi == 'bmi'):
            $berat = isset($_GET['berat']) ? (float) $_GET['berat'] : 0;
            $tinggi = isset($_GET['tinggi']) ? (float) $_GET['tinggi'] : 0;
        ?>
        <div class="info-box">
            <strong>📚 Konsep yang digunakan:</strong> Variabel, Operator, IF-ELSEIF-ELSE, Type Casting
        </div>
        
        <form method="GET">
            <input type="hidden" name="operasi" value="bmi">
            
            <div class="grid-2">
                <div class="form-group">
                    <label>Berat Badan (kg)</label>
                    <input type="number" name="berat" step="0.1" value="<?= $berat ?>" placeholder="Contoh: 70">
                </div>
                <div class="form-group">
                    <label>Tinggi Badan (cm)</label>
                    <input type="number" name="tinggi" step="0.1" value="<?= $tinggi ?>" placeholder="Contoh: 170">
                </div>
            </div>
            
            <button type="submit">Hitung BMI</button>
        </form>
        
        <?php if ($berat > 0 && $tinggi > 0):
            $tinggi_meter = $tinggi / 100;
            $bmi = $berat / ($tinggi_meter ** 2);
            
            // Tentukan kategori
            if ($bmi < 18.5) {
                $kategori = "Kurus (Underweight)";
                $warna = "#3498db";
                $saran = "Anda perlu menambah berat badan dengan pola makan sehat.";
            } elseif ($bmi < 25) {
                $kategori = "Normal";
                $warna = "#27ae60";
                $saran = "Berat badan Anda ideal! Pertahankan pola hidup sehat.";
            } elseif ($bmi < 30) {
                $kategori = "Gemuk (Overweight)";
                $warna = "#f39c12";
                $saran = "Anda perlu menurunkan berat badan dengan olahraga teratur.";
            } else {
                $kategori = "Obesitas";
                $warna = "#e74c3c";
                $saran = "Konsultasikan dengan dokter untuk program diet sehat.";
            }
        ?>
        <div class="result-box">
            <h3>Hasil Perhitungan BMI</h3>
            <div class="result-value" style="color: <?= $warna ?>;"><?= number_format($bmi, 1) ?></div>
            <p style="font-size: 20px; color: <?= $warna ?>; margin: 10px 0;"><?= $kategori ?></p>
            <p><?= $saran ?></p>
            
            <table style="margin-top: 20px;">
                <tr><th>Kategori</th><th>BMI</th></tr>
                <tr><td>Kurus</td><td>&lt; 18.5</td></tr>
                <tr><td>Normal</td><td>18.5 - 24.9</td></tr>
                <tr><td>Gemuk</td><td>25 - 29.9</td></tr>
                <tr><td>Obesitas</td><td>≥ 30</td></tr>
            </table>
        </div>
        <?php endif;
        endif;
        
        // ============================================================
        // 4. KONVERTER SUHU
        // ============================================================
        if ($operasi == 'suhu'):
            $suhu = isset($_GET['suhu']) ? (float) $_GET['suhu'] : 0;
            $dari = $_GET['dari'] ?? 'celsius';
        ?>
        <div class="info-box">
            <strong>📚 Konsep yang digunakan:</strong> Variabel, Switch Statement, Operator Aritmatika
        </div>
        
        <form method="GET">
            <input type="hidden" name="operasi" value="suhu">
            
            <div class="grid-2">
                <div class="form-group">
                    <label>Suhu</label>
                    <input type="number" name="suhu" step="any" value="<?= $suhu ?>" placeholder="Masukkan suhu">
                </div>
                <div class="form-group">
                    <label>Dari</label>
                    <select name="dari">
                        <option value="celsius" <?= $dari == 'celsius' ? 'selected' : '' ?>>Celsius (°C)</option>
                        <option value="fahrenheit" <?= $dari == 'fahrenheit' ? 'selected' : '' ?>>Fahrenheit (°F)</option>
                        <option value="kelvin" <?= $dari == 'kelvin' ? 'selected' : '' ?>>Kelvin (K)</option>
                    </select>
                </div>
            </div>
            
            <button type="submit">Konversi</button>
        </form>
        
        <?php if (isset($_GET['suhu'])):
            switch ($dari) {
                case 'celsius':
                    $celsius = $suhu;
                    $fahrenheit = ($suhu * 9/5) + 32;
                    $kelvin = $suhu + 273.15;
                    break;
                case 'fahrenheit':
                    $celsius = ($suhu - 32) * 5/9;
                    $fahrenheit = $suhu;
                    $kelvin = ($suhu - 32) * 5/9 + 273.15;
                    break;
                case 'kelvin':
                    $celsius = $suhu - 273.15;
                    $fahrenheit = ($suhu - 273.15) * 9/5 + 32;
                    $kelvin = $suhu;
                    break;
            }
        ?>
        <div class="result-box">
            <h3>Hasil Konversi</h3>
            <div style="display: flex; justify-content: space-around; margin-top: 20px;">
                <div>
                    <div style="font-size: 14px; color: #666;">Celsius</div>
                    <div style="font-size: 24px; font-weight: bold; color: #3498db;"><?= number_format($celsius, 2) ?> °C</div>
                </div>
                <div>
                    <div style="font-size: 14px; color: #666;">Fahrenheit</div>
                    <div style="font-size: 24px; font-weight: bold; color: #e74c3c;"><?= number_format($fahrenheit, 2) ?> °F</div>
                </div>
                <div>
                    <div style="font-size: 14px; color: #666;">Kelvin</div>
                    <div style="font-size: 24px; font-weight: bold; color: #9b59b6;"><?= number_format($kelvin, 2) ?> K</div>
                </div>
            </div>
        </div>
        <?php endif;
        endif;
        
        // ============================================================
        // 5. TABEL PERKALIAN
        // ============================================================
        if ($operasi == 'perkalian'):
            $angka = isset($_GET['angka']) ? (int) $_GET['angka'] : 5;
            $sampai = isset($_GET['sampai']) ? (int) $_GET['sampai'] : 10;
        ?>
        <div class="info-box">
            <strong>📚 Konsep yang digunakan:</strong> FOR Loop, Nested Loops
        </div>
        
        <form method="GET">
            <input type="hidden" name="operasi" value="perkalian">
            
            <div class="grid-2">
                <div class="form-group">
                    <label>Angka</label>
                    <input type="number" name="angka" value="<?= $angka ?>" min="1" max="20">
                </div>
                <div class="form-group">
                    <label>Sampai</label>
                    <input type="number" name="sampai" value="<?= $sampai ?>" min="1" max="20">
                </div>
            </div>
            
            <button type="submit">Generate Tabel</button>
        </form>
        
        <?php if (isset($_GET['angka'])): ?>
        <div class="result-box">
            <h3>Tabel Perkalian <?= $angka ?></h3>
            <table>
                <tr>
                    <th>Perkalian</th>
                    <th>Hasil</th>
                </tr>
                <?php for ($i = 1; $i <= $sampai; $i++): ?>
                <tr>
                    <td><?= $angka ?> × <?= $i ?></td>
                    <td><strong><?= $angka * $i ?></strong></td>
                </tr>
                <?php endfor; ?>
            </table>
        </div>
        <?php endif;
        endif;
        ?>
        
    </div>
    
    <p style="text-align: center; color: white; margin-top: 30px;">
        📚 Proyek Hari 1 - Belajar PHP Fullstack<br>
        <small>Menggunakan: Variabel, Operator, Struktur Kontrol, Perulangan</small>
    </p>
</div>

</body>
</html>
