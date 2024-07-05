<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Episode Terbaru - Otakuverse</title>
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
    <section id="episode-terbaru">
            <h3>Episode Terbaru</h3>
            <br>
            <?php
                $episodes = [
                    ['image' => 'DemonSlayer.jpg', 'title' => 'DemonSlayer - Ep 64'],
                    ['image' => 'nura-demon-capital.jpeg', 'title' => 'Nura: Rise of the Yokai Clan - Ep 26'],
                    ['image' => 'Jujutsu Kaisen - Ep 24.webp', 'title' => 'Jujutsu Kaisen - Ep 24']
                ];

                foreach ($episodes as $episode) {
                    echo "<div class='episode'>";
                    echo "<img src='{$episode['image']}' alt='{$episode['title']}'>";
                    echo "<p>{$episode['title']}</p>";
                    echo "</div>";
                }
            ?>
        </section>
    </main>
</body>
</html>
