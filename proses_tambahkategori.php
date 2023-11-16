<?php
$nama_kategori = $_POST['nama_kategori'];

include "config.php";

mysqli_query($conn, "INSERT INTO `kategori` (`nama_kategori`) 
values ('$nama_kategori'); ");

header("location:crudkategori.php");
