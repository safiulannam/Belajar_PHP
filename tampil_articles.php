<?php
include "koneksi.php";
$perintah = "SELECT * FROM articles ORDER BY id DESC";
$hasil = mysqli_query($connection, $perintah);

echo "
<h2>List Artikel</h2>
<br>
<ul>";

while ($row = mysqli_fetch_array($hasil)) {
    echo "
    <li>$row[1] &nbsp; $row[2] &nbsp; $row[time] &nbsp;<a href=\"edit_article.php?id=$row[0]\">Edit</a> &nbsp;<a href=\"delete.php?id=$row[0]\">Hapus</a></li><br>";
}

echo "</ul>";
echo "<br><a href=\"form_artikel.php\">Tambah</a>";
echo "<br><a href=\"adminpanel.php\">Admin Panel</a>";
