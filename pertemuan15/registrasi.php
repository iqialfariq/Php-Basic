<?php
    // Koneksi halaman ini dengan function
    require "function.php";

    // cek apakah tombol registrasi udah di tekan atau belum
    if(isset($_POST['register'])) {
        if(registrasi($_POST) > 0) {
            echo 
            "<script>
                alert('Registrasi berhasil!');
            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        ul {
            list-style: none;
        }

        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username:</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">password:</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <label for="password2">konfirmasi password:</label>
                <input type="password" name="password2" id="password2">
            </li>
            <br>
            <li>
                <button type="submit" name="register">Registrasi</button>
            </li>
        </ul>
    </form>
</body>
</html>