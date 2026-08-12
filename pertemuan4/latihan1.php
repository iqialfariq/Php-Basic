<?php
    // Pengulangan pada array
    // For | Foreach

    $angka = [1, 2, 3, 4, 5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        div {
            width: 100px;
            height: 100px;
            background-color: lightblue;
            margin: 10px;
            display: inline-block;
            text-align: center;
            line-height: 100px;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <!-- Menggunakan for untuk menampilkan elemen array -->
    <?php for ($i = 0; $i < count($angka); $i++): ?>
        <div><?= $angka[$i]; ?></div>
    <?php endfor; ?>

    <br><br>

    <!-- Menggunakan foreach untuk menampilkan elemen array -->
    <?php foreach ($angka as $value): ?>
        <div><?= $value; ?></div>
    <?php endforeach; ?>
</body>
</html>