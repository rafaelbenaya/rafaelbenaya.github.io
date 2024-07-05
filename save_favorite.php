<?php
if (isset($_GET['title'])) {
    $title = $_GET['title'];

    $file = 'favorites.txt';
    $current = file_get_contents($file);
    $current .= $title . "\n";
    file_put_contents($file, $current);

    echo 'Anime "' . $title . '" berhasil ditambahkan ke favorit!';
} else {
    echo 'Gagal menambahkan anime ke favorit.';
}
?>
