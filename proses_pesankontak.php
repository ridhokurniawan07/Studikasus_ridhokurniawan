<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

include "config.php";

mysqli_query($conn, "INSERT INTO `pesan_kontak` (`name`, `email`, `subject`, `message`) 
VALUES ('$name', '$email', '$subject', '$message');");

header("location:contact.php");
