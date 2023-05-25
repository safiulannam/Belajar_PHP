<?php
$con1 = mysqli_connect("localhost", "root", "", "db_latihan11");
if (!$con1) {
    die('Could not connect: ' . mysqli_connect_error());
}
mysqli_query($con1, "DELETE FROM tbl_mhs WHERE LastName='Prabowo'");
mysqli_close($con1);
