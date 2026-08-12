<?php
    // Koneksi halaman ke databse
    $conn = mysqli_connect("localhost", "root", "", "supercar");
    // ambil data dari tabel yang ada di dalam database
    $result = mysqli_query($conn, "SELECT * FROM supercars");
    // Ambil data dari $result | FETCH
    // while($car = mysqli_fetch_assoc($result)){
    //     var_dump($car);
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Supercars</title>
    <style>
        table tr td img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Daftar Supercars</h1>

    <table border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Brand</th>
            <th>Type</th>
            <th>Price</th>
            <th>Picture</th>
        </tr>
        
        <!-- Buat index untuk menampilkan nomor urut -->
        <?php $i = 1; ?>
        <!-- Ambil data dari $result | FETCH -->
        <?php while($car = mysqli_fetch_assoc($result)): ?>
        <tr>
            <!-- Index awal di tambah satu setiap kali loop while berjalan -->
            <td><?= $i++; ?></td>
            <td>
                <a href="#">Edit</a> |
                <a href="#">Delete</a>
            </td>
            <!-- Ambil key dari data variabel cars yang berasal dari result -->
            <td><?= $car['brand']; ?></td>
            <td><?= $car['type']; ?></td>
            <td><?= $car['price']; ?></td>
            <td>
                <img src="img/<?= $car['picture']; ?>" alt="<?= $car['brand']; ?>">
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>