<?php
    // Koneksi halaman ini dengan function
    require "../function.php";
    $keyword = $_GET['keyword'];
    // Ambil data dari tabel supercars
    $query = "SELECT * FROM supercars WHERE 
            brand LIKE '%$keyword%' 
            OR type LIKE '%$keyword%' 
            OR color LIKE '%$keyword%'";
    // Ambil data dari variabel query
    $supercars = query($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data SuperCars</title>
</head>
<body>
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
        <?php foreach($supercars as $car): ?>
        <tr>
            <!-- Index awal di tambah satu setiap kali loop while berjalan -->
            <td><?= $i++; ?></td>
            <td>
                <a href="ubah.php?id=<?= $car['id']; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $car['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
            </td>
            <!-- Ambil key dari data variabel cars yang berasal dari result -->
            <td><?= $car['brand']; ?></td>
            <td><?= $car['type']; ?></td>
            <td class="color"><?= $car['color']; ?></td>
            <td><?= $car['price']; ?></td>
            <td>
                <img src="img/<?= $car['picture']; ?>" alt="<?= $car['brand']; ?>">
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>