<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_user";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
