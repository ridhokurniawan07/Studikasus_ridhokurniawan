<?php
$judul = $_POST['judul'];
$harga = $_POST['harga'];
$id_kategori = $_POST['id_kategori'];
$id_supplier = $_POST['id_supplier'];

include "config.php";

$gambar = $_FILES['gambar']['name'];
$gambar_temp = $_FILES['gambar']['tmp_name'];
$gambar_dest = "dairy-website-template/img/" . $gambar;

move_uploaded_file($gambar_temp, $gambar_dest);

mysqli_query($conn, "INSERT INTO `produk` (`judul`, `harga`, `gambar`, `id_kategori`, `id_supplier`) 
VALUES ('$judul', '$harga', '$gambar', '$id_kategori', '$id_supplier');");

header("location:crudproduk.php");
