<?php
include "koneksi.php";

$title = $_POST["title"];
$author = $_POST["author"];
$lead = $_POST["lead"];
$content = $_POST["content"];
$time = date("Y-m-d H:i:s");

$lead = str_replace("\r\n", "<br>", $lead);
$content = str_replace("\r\n", "<br>", $content);

$sql = "INSERT INTO articles (id, title, author, lead, content, time)
          VALUES (NULL, '$title', '$author', '$lead', '$content', '$time')";
$result = mysqli_query($connection, $sql);

if ($result) {
    echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
    echo "<a href=\"tampil_articles.php\">List</a>";
} else {
    echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
}
