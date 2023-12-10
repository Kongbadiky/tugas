<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
        echo "<script>alert('Password and Confirm Password do not match.');</script>";
    } else {
        // Simpan password dalam bentuk plain text (tidak disarankan)
        $query_sql = "INSERT INTO tabel_user (fullname, username, password) 
                     VALUES ('$fullName', '$username', '$password')";

        if (mysqli_query($conn, $query_sql)) {
            echo "<script>alert('Registrasi berhasil');</script>";
            header("Location: login.php");
            exit;  // Pastikan untuk keluar setelah mengarahkan pengguna
        } else {
            echo "Error: " . $query_sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
        function validateForm() {
            var password = document.forms["registrationForm"]["password"].value;
            var confirmPassword = document.forms["registrationForm"]["confirm_password"].value;

            if (password !== confirmPassword) {
                alert("Password and Confirm Password do not match.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
<div class="register-wrapper">
    <form action="register.php" method="post" name="registrationForm" onsubmit="return validateForm()">
        <h1>Register</h1>
        <div class="input-box">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="text" name="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock'></i>
        </div>
        <div class="input-box">
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <i class='bx bxs-lock'></i>
        </div>
        <button type="submit" class="btn">Register</button>
        <div class="login-link">
            <p>Already have an account? <a href="./login.php">Login</a></p>
        </div>
    </form>
</div>
</body>
</html>
