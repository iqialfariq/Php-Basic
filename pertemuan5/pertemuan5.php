<?php
    $angka = [
        [1, 2, 3], 
        [4, 5, 6], 
        [7, 8, 9]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Numerik</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: #ddd;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: all .5s ease;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
            border: 1px solid #000;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php foreach ($angka as $baris) : ?>
        <?php foreach ($baris as $value) : ?>
            <div class="kotak"><?= $value; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>