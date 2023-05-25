<?php
$con1 = mysqli_connect("localhost", "root", "", "db_latihan11");
if (!$con1) {
    die('Could not connect: ' . mysqli_error());
}
mysqli_query($con1, "UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
mysqli_close($con1);
