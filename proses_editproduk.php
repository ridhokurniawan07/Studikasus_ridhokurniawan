<?php
$id = $_GET['id'];
$judul = $_POST['judul'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
$id_kategori = $_POST['id_kategori'];
$id_supplier = $_POST['id_supplier'];

include "config.php";

mysqli_query($conn, "UPDATE produk SET  judul = '$judul', harga = '$harga', gambar = '$gambar', id_kategori = '$id_kategori', 
id_supplier = '$id_supplier' WHERE id_produk = '$id'");


header("location:crudproduk.php");
