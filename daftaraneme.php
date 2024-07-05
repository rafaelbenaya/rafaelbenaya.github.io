<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anime - Otakuverse</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<header>
        <nav>
            
            <a href="index.php">Home</a>
            <a href="episodeterbaru.php">Anime List</a>
            <a href="daftaraneme.php">Favorites</a>
        </nav>
    </header>
    <main>
    <section id="daftar-anime">
            <br>
            <h3>Daftar Anime yang Sedang Tayang</h3>
            <div class="anime-list">
                <?php
                    $animeList = [
                        [
                            'title' => 'Attack on Titan Final Season',
                            'genre' => 'Action, Drama, Fantasy',
                            'studio' => 'MAPPA',
                            'image' => 'Attack on Titan Final Season.jpg',
                            'synopsis' => 'Anime yang mengisahkan pertempuran sengit antara manusia dan Titan.'
                        ],
                        [
                            'title' => 'Suzume',
                            'genre' => 'Action, Comedy, Super Power',
                            'studio' => 'QQAP',
                            'image' => 'suzume-1_169.png',
                            'synopsis' => 'Cerita tentang seorang pasangan yang sangat mencintai.'
                        ],
                        [
                            'title' => 'My Hero Academia Season 5',
                            'genre' => 'Action, Comedy, Super Power',
                            'studio' => 'Bones',
                            'image' => 'anime-my-hero-academia.png',
                            'synopsis' => 'Cerita tentang sekolah pahlawan dan kemampuan super.'
                        ],
                        [
                            'title' => 'Fullmetal Alchemist Brotherhood',
                            'genre' => 'Action, Comedy,fantasy',
                            'studio' => 'DPAA',
                            'image' => 'Jujutsu Kaisen - Ep 24.webp',
                            'synopsis' => 'anime yang berkaitan dengan kekuatan.'
                        ],
                        [
                            'title' => 'Rise of the Yokai Clan',
                            'genre' => 'Action, Comedy, Super Power,fantasy',
                            'studio' => 'guyrer',
                            'image' => 'Fullmetal Alchemist Brotherhood - Ep 64.jpg',
                            'synopsis' => 'Cerita tentang petualangan seseorang.'
                        ],
                        [
                            'title' => 'Jujutsu Kaisen',
                            'genre' => 'Action, Comedy, Super Power',
                            'studio' => 'opeksx',
                            'image' => 'nura-demon-capital.jpeg',
                            'synopsis' => 'Cerita tentang keangkuhan seseorang yang saat besar.'
                        ],
                        
                    ];

                    foreach ($animeList as $anime) {
                        echo "<div class='anime'>";
                        echo "<img src='{$anime['image']}' alt='{$anime['title']}'>";
                        echo "<h4>{$anime['title']}</h4>";
                        echo "<p><strong>Genre:</strong> {$anime['genre']}</p>";
                        echo "<p><strong>Studio:</strong> {$anime['studio']}</p>";
                        echo "<p>{$anime['synopsis']}</p>";
                        echo "<button onclick='addToFavorites(\"{$anime['title']}\")'>Add to Favorites</button>";
                        echo "</div>";
                    }
                ?>
            </div>
        </section>
    </main>
</body>
</html>
