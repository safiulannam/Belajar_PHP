<?php
$dbhost1 = "localhost";
$dbuser1 = "root";
$dbpass1 = "";
$dbname1 = "db_latihan11";

//lakukan koneksi dengan mysql
$connection = mysqli_connect($dbhost1, $dbuser1, $dbpass1, $dbname1);
if (!$connection) {
    echo "Tidak dapat terhubung dengan database";
}
echo "Koneksi berhasil";
