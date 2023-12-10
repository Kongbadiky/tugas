<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query_sql = "SELECT * FROM tabel_user WHERE username = '$username'";
    $result = mysqli_query($conn, $query_sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if ($password === $row['password']) {
                session_start();
                $_SESSION['username'] = $username;

                header("Location: dashboard.php");
                exit;  
            } else {
                echo "<script>alert('Password salah. Login ulang.');</script>";
            }
        } else {
            echo "<script>alert('Username tidak ditemukan. Login ulang.');</script>";
        }
    } else {
        echo "Error: " . $query_sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="login.php" method="post">
            <h1>Login</h1>

            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required><i class='bx bxs-user' ></i>
            </div>
            
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required><i class='bx bxs-lock'></i>
            </div>
            
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label><a href="#">forgot password?</a>
            </div>
            
            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="./register.php">register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
