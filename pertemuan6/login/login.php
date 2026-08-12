<?php
    // Cek apakah tombol submit sudah di tekan atau belum
    if (isset($_POST['submit'])) {
        // Cek username & password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Jika benar, redirect ke halaman admin
        if ($username == 'admin' && $password == '123') {
            header('Location: admin.php');
            exit();
        } else {
            // Jika salah, tampilkan pesan kesalahan
            $error = true;
        }
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
    <h1>Login Admin</h1>

    <?php if (isset($error)): ?>
        <p>Username / Password Salah!</p>
    <?php endif; ?>

    <ul>
        <form action="admin.php" method="post">
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username">
            </li>
            <br>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>