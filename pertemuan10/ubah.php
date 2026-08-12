<?php
    // Koneksi halaman ini dengan function
    require "function.php";

    // Ambil data di url
    $id = $_GET['id'];
    // Query data supercar berdasarkan id
    $car = query("SELECT * FROM supercars WHERE id = $id")[0];

    // Cek apakah tombol sumbit sudah di tekan atau belum
    if(isset($_POST['submit'])) {
        // Cek apakah data berhasil di tambahkan atau tidak
        if(ubah($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil diubah');
                    document.location.href = 'latihan1.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal diubah');
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
    <title>Ubah Data Supercar</title>
    <style>
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Ubah Data Supercar</h1>

    <form action="" method="post">
        <ul>
            <li>
                <input type="hidden" name="id" value="<?= $car['id']; ?>">
            </li>
            <li>
                <label for="brand">Brand:</label>
                <input type="text" name="brand" placeholder="Brand" required value="<?= $car['brand']; ?>">
            </li>
            <br>
            <li>
                <label for="type">Type:</label>
                <input type="text" name="type" placeholder="Type" required value="<?= $car['type']; ?>">
            </li>
            <br>
            <li>
                <label for="color">Color:</label>
                <input type="text" name="color" placeholder="Color" required value="<?= $car['color']; ?>">
            </li>
            <br>
            <li>
                <label for="price">Price:</label>
                <input type="text" name="price" placeholder="Price" required value="<?= $car['price']; ?>">
            </li>
            <br>
            <li>
                <label for="picture">Picture:</label>
                <input type="text" name="picture" placeholder="Picture" required value="<?= $car['picture']; ?>">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
    <br><br>
    <a href="latihan1.php">Kembali ke Daftar Supercar</a>
</body>
</html>