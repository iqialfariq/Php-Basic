<?php
    // Superglobals $_GET
    // $_GET['nama'] = 'John Doe';
    // var_dump($_GET);

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
    <title>Daftar Super Car</title>
    <style>
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Daftar Super Car</h1>
    <?php foreach($supercar as $car): ?>
        <ul>
            <li>
                <a href="latihan1.php?brand=<?= $car['Brand']; ?>&type=<?= $car['Type']; ?>&color=<?= $car['Color']; ?>&price=<?= $car['Price']; ?>&img=<?= $car['Img']; ?>">Brand: <?= $car['Brand']; ?></a>
            </li>
        </ul>
    <?php endforeach?>
</body>
</html>