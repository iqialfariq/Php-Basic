<?php
    // Array Associative
    $supercar = [
        [
            "Brand" => "Porche", 
            "Type" => "T918 Spyder", 
            "Color" => "White, Orange, Gray", 
            "Price" => "Rp 60 Miliar",
            "Img" => "918.jpg"
        ],
        [
            "Brand" => "Mercedez",
            "Type" => "Amg GT Black Series",
            "Color" => "White, Orange, Gray", 
            "Price" => "Rp 13 Miliar",
            "Img" => "amg.jpg"
        ],
        [
            "Brand" => "Lamborghini",
            "Type" => "Aventador",
            "Color" => "White, Orange, Gray", 
            "Price" => "Rp 23 Miliar",
            "Img" => "aventador.jpg"
        ],
        [
            "Brand" => "Ferrari",
            "Type" => "SF90 Stradale",
            "Color" => "White, Orange, Gray", 
            "Price" => "Rp 55 Miliar",
            "Img" => "laferrari.jpg"
        ],
        [
            "Brand" => "Mclaren",
            "Type" => "P one",
            "Color" => "White, Orange, Gray", 
            "Price" => "Rp 19 Miliar",
            "Img" => "p1.jpg"
        ],
        [
            "Brand" => "Aston Martin",
            "Type" => "Spyder",
            "Color" => "White, Orange, Gray", 
            "Price" => "Rp 10 Miliar",
            "Img" => "vantage.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Supercar</title>
    <style>
        ul {
            list-style: none;
        }

        ul li img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 10px 0;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Daftar Supercar</h1>
    <?php foreach ($supercar as $supercars) : ?>
        <ul>
            <li>Brand: <?= $supercars["Brand"]; ?></li>
            <li>Type: <?= $supercars["Type"]; ?></li>
            <li>Color: <?= $supercars["Color"]; ?></li>
            <li>Price: <?= $supercars["Price"]; ?></li>
            <li><img src="img/<?= $supercars["Img"]; ?>" alt="<?= $supercars["Brand"]; ?>" width="200"></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>