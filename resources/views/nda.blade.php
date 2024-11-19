<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Disclosure Agreement (NDA)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        .agreement {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background: #f9f9f9;
        }
        .signature {
            margin-top: 20px;
        }
        .signature div {
            margin-bottom: 10px;
        }
        .signature-line {
            border-top: 1px solid #333;
            width: 300px;
        }
        .form-buttons {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="agreement">
        <h1>Non-Disclosure Agreement (NDA)</h1>
        <p><strong>Tanggal:</strong> <?= date('Y-m-d') ?></p>

        <h2>Pihak yang Terlibat</h2>
        <p><strong>Pihak Pertama:</strong> Tim Kadad2 (Perusahaan)</p>
        <p><strong>Pihak Kedua:</strong> <?= auth()->user()->name ?></p>

        <h2>1. Latar Belakang</h2>
        <p>Tim Kadad2 (selanjutnya disebut "Perusahaan") memberikan layanan joki game atas nama Pihak Kedua ("Klien"). Dalam pelaksanaan layanan ini, Klien akan memberikan informasi sensitif terkait akun game yang harus dijaga kerahasiaannya oleh Perusahaan.</p>

        <h2>2. Definisi Informasi Rahasia</h2>
        <p>Informasi Rahasia mencakup namun tidak terbatas pada:</p>
        <ul>
            <li>Nama pengguna (username).</li>
            <li>Kata sandi (password).</li>
            <li>Data permainan seperti riwayat permainan, item dalam game, atau mata uang virtual.</li>
            <li>Informasi pribadi lain yang diberikan oleh Klien untuk keperluan layanan.</li>
        </ul>

        <h2>3. Kewajiban Kerahasiaan</h2>
        <p>Perusahaan berjanji untuk:</p>
        <ol>
            <li>Tidak membagikan Informasi Rahasia Klien kepada pihak ketiga tanpa persetujuan tertulis.</li>
            <li>Menggunakan Informasi Rahasia hanya untuk kepentingan pelaksanaan layanan yang disepakati.</li>
            <li>Melindungi Informasi Rahasia agar tidak disalahgunakan atau diakses secara tidak sah.</li>
        </ol>

        <h2>4. Durasi</h2>
        <p>Perjanjian ini berlaku sejak tanggal ditandatangani dan tetap berlaku hingga 1 tahun setelah layanan selesai diberikan.</p>

        <h2>5. Konsekuensi Pelanggaran</h2>
        <p>Jika Perusahaan melanggar perjanjian ini, Klien berhak untuk:</p>
        <ul>
            <li>Melakukan tuntutan hukum atas kerugian yang ditimbulkan.</li>
            <li>Menuntut penghentian penggunaan dan pengembalian semua Informasi Rahasia.</li>
        </ul>

        <h2>6. Hukum yang Berlaku</h2>
        <p>Perjanjian ini tunduk pada hukum yang berlaku di Indonesia.</p>

        <form action="/nda/submit" method="POST">
            @csrf
            <h3>Pernyataan Persetujuan</h3>
            <div>
                <input type="radio" id="agree" name="nda_agreement" value="agree" required>
                <label for="agree">Saya Setuju</label>
            </div>
            <div>
                <input type="radio" id="disagree" name="nda_agreement" value="disagree" required>
                <label for="disagree">Saya Tidak Setuju</label>
            </div>
            <div class="form-buttons">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>
