<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD Dengan PHP</title>
</head>
<body>
    <div>
        <h1>Membuat CRUD Dengan PHP</h1>
    </div>

    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data berhasil diinput";
        } else if ($pesan == "update") {
            echo "Data berhasil diupdate";
        } else if ($pesan == "hapus") {
            echo "Data berhasil di hapus";
        }
    }
    ?>
    <br>
    <a class="tombol" href="tambah.php">+ Tambah Data Baru</a>
    <h3>Data User</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>

        <?php
        //Untuk menjalankan perintah mysql
        include "koneksi.php";
        global $conn;
        $query_mysql = mysqli_query($conn, "SELECT * FROM mahasiswa");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {

        ?>

            <!--untuk menampilkan data table-->
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>