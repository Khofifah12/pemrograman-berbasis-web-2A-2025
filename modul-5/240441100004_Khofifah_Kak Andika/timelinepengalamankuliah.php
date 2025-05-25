<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Timeline Pengalaman Kuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background:rgb(218, 16, 171);
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .timeline {
            position: relative;
            margin: 50px auto;
            padding: 0;
            width: 60%;

        }
        .event {
            position: relative;
            margin-left: 50px;
            margin-bottom: 30px;
            padding: 10px 20px;
            background: #fff;
            border-left: 8px solid rgb(160, 24, 140);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .event h3 {
            margin: 0;
            color: #3498db;
        }
        .event p {
            margin: 5px 0 0;
        }
        .buttons {
            text-align: center;
            margin-top: 40px;
        }
        .buttons a {
            text-decoration: none;
            color: white;
            background-color: #3498db;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
        }
        .buttons a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<h1>Timeline Pengalaman Kuliah</h1>

<div class="timeline">
    <?php
    $pengalaman = [
        [
            "tahun" => "Agustus 2024",
            "judul" => "Masa Ospek",
            "deskripsi" => "Mulai masuk dan ospek di Universitas Trunojoyo"
        ],
        [
            "tahun" => "September 2024",
            "judul" => "Mulai Matkul",
            "deskripsi" => "Memulai perkuliahan di jurusan Sistem Informasi. Mengenal dunia coding dan dasar-dasar komputer."
        ],
        [
            "tahun" => "Oktober 2024",
            "judul" => "Masa Praktikum",
            "deskripsi" => "Mulai Praktikum dan belajar hal-hal yang belum pernah dipelajari atau mulai dari 0"
        ],
        [
            "tahun" => "Februari 2025",
            "judul" => "Ikut HMP",
            "deskripsi" => "Menjadi Anggota/Staff Himpunan Mahasiswa Sistem Informasi UTM"
        ],
    ];

    foreach ($pengalaman as $item) {
        echo "<div class='event'>
                <h3>{$item['tahun']} - {$item['judul']}</h3>
                <p>{$item['deskripsi']} - </p>
              </div>";
    }
    ?>
</div>

    <div class="buttons">
    <a href="profil_mahasiswa.php" style="text-decoration: none; background-color: #3498db; color: white; padding: 10px 20px; border-radius: 5px; margin-right: 10px;">Kembali Ke Profil</a>
    <a href="blog_relektif.php" style="text-decoration: none; background-color: #2ecc71; color: white; padding: 10px 20px; border-radius: 5px;">Menuju Blog</a>
    </div>
</body>
</html>

