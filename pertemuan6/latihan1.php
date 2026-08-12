<?php
    // Cek apakah tidak ada data di $_POST
    if(
        !isset($_GET['brand']) || 
        !isset($_GET['type']) || 
        !isset($_GET['color']) || 
        !isset($_GET['price']) || 
        !isset($_GET['img'])) {
        
        header("Location: pertemuan6.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Super Car</title>
    <style>
        ul {
            list-style: none;
        }
        
        ul li img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Daftar Super Car</h1>
        <ul>
            <li>Brand: <?= $_GET['brand'] ?></li>
            <li>Type: <?= $_GET['type'] ?></li>
            <li>Color: <?= $_GET['color'] ?></li>
            <li>Price: <?= $_GET['price'] ?></li>
            <li><img src="img/<?= $_GET['img'] ?>" alt="<?= $_GET['brand'] ?>" width="200"></li>
        </ul>

    <a href="pertemuan6.php">Kembali</a>
</body>
</html>