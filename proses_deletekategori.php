<?php
include "config.php";

$id = $_GET['id'];

mysqli_query($conn, "delete  from kategori where id_kategori= '$id' ");


header("location:crudkategori.php");
