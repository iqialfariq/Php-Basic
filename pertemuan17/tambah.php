<?php
    // Cek session login udah berhasil belum
    session_start();
    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }
    
    // Koneksi halaman ini dengan function
    require "function.php";
    // Cek apakah tombol sumbit sudah di tekan atau belum
    if(isset($_POST['submit'])) {
        // Cek apakah data berhasil di tambahkan atau tidak
        if(tambah($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'latihan1.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal ditambahkan');
                    document.location.href = 'latihan1.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Supercar</title>
    <style>
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Supercar</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="brand">Brand:</label>
                <input type="text" name="brand" placeholder="Brand" required>
            </li>
            <br>
            <li>
                <label for="type">Type:</label>
                <input type="text" name="type" placeholder="Type" required>
            </li>
            <br>
            <li>
                <label for="color">Color:</label>
                <input type="text" name="color" placeholder="Color" required>
            </li>
            <br>
            <li>
                <label for="price">Price:</label>
                <input type="text" name="price" placeholder="Price" required>
            </li>
            <br>
            <li>
                <label for="picture">Picture:</label>
                <input type="file" name="picture" placeholder="Picture" required>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
    <br><br>
    <a href="latihan1.php">Kembali ke Daftar Supercar</a>
</body>
</html>