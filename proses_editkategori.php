<?php
$id = $_GET['id'];
$nama_kategori = $_POST['nama_kategori'];


include "config.php";

mysqli_query($conn, "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id'");


header("location:crudkategori.php");
