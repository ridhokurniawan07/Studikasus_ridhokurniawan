<?php
$id = $_GET['id'];
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];


include "config.php";

mysqli_query($conn, "UPDATE supplier SET nama_supplier = '$nama_supplier', alamat = '$alamat', no_telp = '$no_telp' WHERE id_supplier = '$id'");



header("location:crudsupplier.php");
