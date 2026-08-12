<?php
    // Koneksi halaman ini dengan function
    require "function.php";
    // Buat variabel untuk menampung query dari tabel lalu kirimkan ke function
    $supercars = query("SELECT * FROM supercars ORDER BY id ASC");

    // Jika tombol cari di tekan timpa semua data dengan data pencarian user
    if(isset($_POST["cari"])) {
        $supercars = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Supercars</title>
    <style>
        table tr td img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        table tr td.color {
            width: 471px;
        }
    </style>
</head>
<body>
    <h1>Daftar Supercars</h1>

    <a href="tambah.php">Tambah Data Supercar</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" placeholder="Cari supercar..." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>

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