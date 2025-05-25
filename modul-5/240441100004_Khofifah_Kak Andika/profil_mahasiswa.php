<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Interaktif Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: rgb(192, 34, 166);
        }

        h1, h2, h3 {
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: rgb(250, 200, 240);
        }

        .form-section {
            background-color: rgb(212, 93, 192);
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #2ecc71;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #27ae60;
        }

        .buttons a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            margin-right: 10px;
        }

        .buttons a:first-child {
            background-color: #3498db;
        }

        .buttons a:last-child {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>

<h1>Profil Interaktif Mahasiswa</h1>

<?php
$mahasiswa = [
    "nama" => "Khofifah",
    "nim" => "240441100004",
    "ttl" => "Sampang, 15 Februari 2006",
    "email" => "khofifahfifah567@gmail.com",
    "hp" => "085855247113"
];

echo "<h2>Data Diri Mahasiswa</h2>";
echo "<table>
        <tr><th>Nama</th><td>{$mahasiswa['nama']}</td></tr>
        <tr><th>NIM</th><td>{$mahasiswa['nim']}</td></tr>
        <tr><th>Tempat, Tanggal Lahir</th><td>{$mahasiswa['ttl']}</td></tr>
        <tr><th>Email</th><td>{$mahasiswa['email']}</td></tr>
        <tr><th>Nomor HP</th><td>{$mahasiswa['hp']}</td></tr>
      </table>";
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bahasa = isset($_POST['bahasa']) ? explode(',', $_POST['bahasa']) : [];
    $pengalaman = trim($_POST['pengalaman']);
    $software = $_POST['software'] ?? [];
    $os = $_POST['os'] ?? '';
    $tingkat_php = $_POST['tingkat_php'] ?? '';

    if (!empty($bahasa) && $pengalaman && !empty($software) && $os && $tingkat_php) {
        echo "<h2>Hasil Formulir Tambahan</h2>";
        echo "<table>
                <tr><th>Bahasa Pemrograman Dikuasai</th><td>" . implode(", ", array_map('trim', $bahasa)) . "</td></tr>
                <tr><th>Software yang Sering Digunakan</th><td>" . implode(", ", $software) . "</td></tr>
                <tr><th>Sistem Operasi</th><td>$os</td></tr>
                <tr><th>Tingkat Penguasaan PHP</th><td>$tingkat_php</td></tr>
              </table>";
        echo "<h3>Penjelasan Proyek</h3><p>$pengalaman</p>";

        if (count($bahasa) > 2) {
            echo "<p><strong>Anda cukup berpengalaman dalam pemrograman!</strong></p>";
        }
    } else {
        echo "<p style='color: red;'><strong>Semua input wajib diisi!</strong></p>";
    }
}
?>

<div class="form-section">
    <form method="POST" action="">
        <h2>Form Isian Tambahan</h2>

        <label>Bahasa Pemrograman Dikuasai (pisahkan dengan koma):</label>
        <input type="text" name="bahasa" placeholder="contoh: php, java, python,dll." required>

        <label>Pengalaman Proyek:</label>
        <textarea name="pengalaman" rows="4" required></textarea>

        <label>Software yang Sering Digunakan:</label><br>
        <input type="checkbox" name="software[]" value="VS Code"> VS Code<br>
        <input type="checkbox" name="software[]" value="XAMPP"> XAMPP<br>
        <input type="checkbox" name="software[]" value="Git"> Git<br><br>

        <label>Sistem Operasi:</label><br>
        <input type="radio" name="os" value="Windows" required> Windows<br>
        <input type="radio" name="os" value="Linux" required> Linux<br>
        <input type="radio" name="os" value="Mac" required> Mac<br><br>

        <label>Tingkat Penguasaan PHP:</label>
        <select name="tingkat_php" required>
            <option value="">-- Pilih --</option>
            <option value="Pemula">Pemula</option>
            <option value="Menengah">Menengah</option>
            <option value="Mahir">Mahir</option>
        </select><br><br>

        <input type="submit" value="Kirim">
    </form>
</div>

<div class="buttons">
    <a href="timelinepengalamankuliah.php">Menuju Timeline Kuliah</a>
    <a href="blog_relektif.php">Menuju Blog</a>
</div>

</body>
</html>