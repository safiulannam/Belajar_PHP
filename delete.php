<?php
include "koneksi.php";
$articleID = $_GET['id'];
$perintah = "DELETE FROM articles WHERE id=\"$articleID\"";
$hasil1 = mysqli_query($connection, $perintah);

if ($hasil1) {
    echo "Artikel berhasil dihapus<br>";
    echo "<a href=\"edit_articles.php\">Back</a>";
} else {
    echo "Artikel gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke database MySQL.";
}
