<?php
    // Koneksi halaman ini dengan function
    require "function.php";

    // Cek apakah tombol login sudah di tekan atau belum
    if(isset($_POST['login'])) {
        // tangkap username dan password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Cek ada ga data yang sama di dalam database saat user login
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1) {
            // Cek password
            $row = mysqli_fetch_assoc($result);
            // Kalau password sama dengan yang ada di databse kasih masuk
            if(password_verify($password, $row['password'])) {
                // Lalu redirect ke halaman utama
                header("Location: latihan1.php");
                exit;
            }
        }

        $error = true;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        ul {
            list-style: none;
        }

        p {
            color: red;
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    
    <?php if(isset($error)): ?>
    <p>Username atau password salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>
</body>
</html>