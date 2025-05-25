<?php
$articles = [
    [
        'id' => 1,
        'title' => 'TUTORIAL WEB SCRAPING UNTUK PEMULA DENGAN PYTHON',
        'date' => '05 April 2025',
        'content' => 'Web scraping adalah salah satu keterampilan yang sangat berguna di dunia digital saat ini. Dengan kemampuan ini, kita bisa mengumpulkan data dari berbagai sumber di internet secara otomatis.Dalam blog ini, kita akan membahas cara melakukan web scraping menggunakan Python, khususnya dengan menggunakan library requests dan BeautifulSoup.',
        'image' => 'images/download.avif',
        'sumber' => 'https://sko.dev/tutorial-web-scraping-untuk-pemula-python',
    ],
    [
        'id' => 2,
        'title' => 'TYPESCRIPT VS JAVASCRIPT, PILIH YANG MANA?',
        'date' => '25 Agustus 2024',
        'content' => 'TypeScript dan JavaScript adalah dua bahasa pemrograman yang sangat populer dalam pengembangan web. Meskipun keduanya sering digunakan secara bersamaan, mereka memiliki perbedaan mendasar yang membuat masing-masing unik. Memahami perbedaan ini dapat membantu pengembang memilih bahasa yang paling sesuai untuk kebutuhan proyek mereka. ',
        'image' => 'images/download (1).avif',
        'sumber' => 'https://sko.dev/typescript-vs-javascript-mending-pilih-yang-mana',
    ],
    [
        'id' => 3,
        'title' => '7 KESALAHAN MAHASISWA IT SAAT SEDANG MENJALANI PERKULIAHAN!',
        'date' => '08 Juni 2024',
        'content' => 'Jurusan IT adalah salah satu jurusan perkuliahan yang populer dan paling diminati saat ini karena perkembangan teknologi yang pesat dan asumsi kebutuhan industri yang besar akan tenaga kerja yang ahli di bidang teknologi. Mahasiswa IT umumnya mempelajari berbagai keterampilan teknis seperti pemrograman, analisis data, keamanan siber, jaringan komputer, dan pengembangan perangkat lunak.
        Namun, di balik popularitasnya, banyak mahasiswa IT yang menghadapi berbagai keresahan, seperti tekanan akademik yang tinggi, kesulitan mengikuti perkembangan teknologi yang cepat, dan kebingungan dalam membangun karir yang sukses.Hal ini diperparah oleh masa “Tech Winter”, dimana mencari pekerjaan dalam bidang IT saat ini bisa dibilang sedang susah.',
        'image' => 'images/download 2.avif',
        'sumber' => 'https://sko.dev/kesalahan-mahasiswa-it-saat-menjalani-perkuliahan',
    ]
];

$quotes = [
    "Katanya koding pakai logika, tapi kenapa logikaku ditolak sama compiler?",
    "Aku bukan malas, aku cuma sedang dalam mode hemat energi.",
    "Laporan coding bisa di-submit ulang. Tapi perasaan ini? Nggak ada versi backup-nya."
];
$selected_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$article = null;

if ($selected_id > 0) {
    foreach ($articles as $item) {
        if ($item['id'] === $selected_id) {
            $article = $item;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-violet-300">
    <div class=" px-4 py-8">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800">BLOG BERITA</h1>
        </header>

        <?php if ($article): ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-6">
                    <a href="?" class="inline-flex items-center text-blue-600 hover:text-blue-800 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        kembali
                    </a>
                    
                    <h2 class="text-2xl font-bold text-gray-800 mb-2"><?= htmlspecialchars($article['title']) ?></h2>
                    <p class="text-gray-500 mb-4"><?= htmlspecialchars($article['date']) ?></p>
                    
                    <img src="<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['title']) ?>" class="w-full h-64 object-cover rounded-lg mb-6">
                    
                    <p class="text-gray-700 mb-6 leading-relaxed"><?= nl2br(htmlspecialchars($article['content'])) ?></p>
                    <p class="text-sm text-gray-500">
                        Sumber: <a href="<?= htmlspecialchars($article['sumber']) ?>" target="_blank" class="text-blue-600 hover:underline"><?= htmlspecialchars($article['sumber']) ?></a>
                    </p>

                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">kata-kata hari ini</h3>
                <blockquote class="italic text-gray-700 border-l-4 border-blue-400 pl-4 py-2">
                    "<?= htmlspecialchars($quotes[array_rand($quotes)]) ?>"
                </blockquote>
            </div>
            
        <?php else: ?>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($articles as $item): ?>
                    <a href="?id=<?= $item['id'] ?>" class="article-card bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-gray-800 mb-2"><?= htmlspecialchars($item['title']) ?></h2>
                            <p class="text-gray-500 text-sm mb-3"><?= htmlspecialchars($item['date']) ?></p>
                            <p class="text-gray-600 line-clamp-3"><?= nl2br(htmlspecialchars($item['content'])) ?></p>
                            <div class="mt-4 text-blue-600 hover:text-blue-800 flex items-center">
                                Baca selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
            
            <div class="mt-8 bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">kata-kata hari ini</h3>
                <blockquote class="italic text-gray-700 border-l-4 border-blue-400 pl-4 py-2">
                    "<?= htmlspecialchars($quotes[array_rand($quotes)]) ?>"
                </blockquote>
            </div>
            <div class="mt-8 flex justify-between">
            <a href="profil_mahasiswa.php" style="text-decoration: none; background-color: #3498db; color: white; padding: 10px 20px; border-radius: 5px; margin-right: 10px;">Kembali Ke Profil</a>
            <a href="timelinepengalamankuliah.php" style="text-decoration: none; background-color: #2ecc71; color: white; padding: 10px 20px; border-radius: 5px;">Kembali Ke Pengalaman Kuliah</a>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
