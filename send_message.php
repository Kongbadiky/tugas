<?php
require 'koneksi.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username']; // Ambil username dari sesi
    $message = $_POST['message'];

    // Query SQL untuk menyimpan data ke database
    $query_sql = "INSERT INTO tabel_contact (user, message) VALUES ('$username', '$message')";

    if (mysqli_query($conn, $query_sql)) {
        echo "<script>alert('Pesan berhasil dikirim.');</script>";
        echo "<script>window.location.href='dashboard.php';</script>"; // Arahkan ke dashboard setelah menampilkan notifikasi
        exit;  // Pastikan untuk keluar setelah mengarahkan pengguna
    } else {
        echo "Error: " . $query_sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
