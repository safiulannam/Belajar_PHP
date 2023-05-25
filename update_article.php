<?php
include "koneksi.php";

$title = $_POST["title"];
$author = $_POST["author"];
$lead = $_POST["lead"];
$content = $_POST["content"];
$time = date("Y-m-d H:i:s");

$lead = str_replace("\r\n", '<br>', $lead);
$content = str_replace("\r\n", "<br>", $content);

$update = "UPDATE articles SET title='$title', author='$author',
lead='$lead', content='$content', time='$time' WHERE id >= 1 AND id <= 900";
$hasil = mysqli_query($connection, $update);

if ($hasil) {
    echo "Artikel berhasil diupdate<br>";
    echo "<a href=\"tampil_articles.php\">List</a>";
} else {
    echo "Artikel gagal diupdate";
}
