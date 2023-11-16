<?php
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

include "config.php";

mysqli_query($conn, "INSERT INTO `supplier` (`nama_supplier`, `alamat`,`no_telp`) 
values ('$nama_supplier', '$alamat', '$no_telp'); ");

header("location:crudsupplier.php");
