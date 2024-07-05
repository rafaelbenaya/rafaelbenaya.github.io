function addToFavorites(title) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'save_favorite.php?title=' + encodeURIComponent(title), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText); // Tampilkan pesan sukses dari PHP
        }
    };
    xhr.send();
}
