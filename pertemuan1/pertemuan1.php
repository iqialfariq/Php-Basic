<?php
    // Pertemuan 1 - Syntax PHP Dasar
    
    // Ini adalah komentar

    // Standart Output PHP
    // Echo
    echo "Hello, World!";
    echo '<br>';
    echo '<br>';

    // Print
    print "Hello, World!";
    echo '<br>';
    echo '<br>';

    // Print_r
    $variabel1 = 'Ini Tulisan Ya';
    print_r($variabel1);
    echo '<br>';
    echo '<br>';

    // Var_dump
    $variabel2 = 12345678;
    var_dump($variabel2);
    echo '<br>';
    echo '<br>';

    // Penulisan Syntax PHP
    // 1. PHP di dalam HTML
    // 2. HTML di dalam PHP

    // Variabel | Tidak boleh di awali dengan simbol dan angka
    $Inivariabel = 'Ini adalah nilai dari variabel';

    // Operator Aritmatika | + - * / %
    $x = 10;
    $y = 4;

    echo $x + $y;
    echo '<br>';
    echo $y - $x;
    echo '<br>';
    echo $x * $y;
    echo '<br>';
    echo $y / $x;
    echo '<br>';
    echo $x % $y;
    echo '<br>';
    echo '<br>';

    // Operator Concatenation | .
    $nama_depan = "Di gabungkan";
    $nama_belakang = "Dengan Titik";
    echo $nama_depan . " " . $nama_belakang;
    echo '<br>';
    echo '<br>';

    // Operator Assignment | = += -= *= /= %= .=
    $a = 5;
    echo $a;
    echo '<br>';
    $a += 3; // $a = $a + 3
    echo $a;
    echo '<br>';
    $a -= 2; // $a = $a - 2
    echo $a;
    echo '<br>';
    $a *= 4; // $a = $a * 4
    echo $a;
    echo '<br>';
    $a /= 2; // $a = $a / 2
    echo $a;
    echo '<br>';
    $a %= 3; // $a = $a % 3
    echo $a;
    echo '<br>';
    $nama = "John";
    $nama .= " Doe"; // $nama = $nama . " Doe"
    echo $nama;
    echo '<br>';
    echo '<br>';

    // Operator Perbandingan | == != < > <= >=
    $b = 10;
    $c = 20;
    echo $b == $c ? "Sama" : "Tidak Sama";
    echo '<br>';
    echo $b != $c ? "Berbeda" : "Sama";
    echo '<br>';
    echo $b < $c ? "Lebih Kecil" : "Tidak Lebih Kecil";
    echo '<br>';
    echo $b > $c ? "Lebih Besar" : "Tidak Lebih Besar";
    echo '<br>';
    echo $b <= $c ? "Lebih Kecil atau Sama" : "Tidak Lebih Kecil atau Sama";
    echo '<br>';
    echo $b >= $c ? "Lebih Besar atau Sama" : "Tidak Lebih Besar atau Sama";
    echo '<br>';
    echo '<br>';

    // Operator Identitas | === !==
    echo 1 === "1" ? "Sama" : "Tidak Sama";
    echo '<br>';
    echo 1 !== "1" ? "Berbeda" : "Sama";
    echo '<br>';
    echo '<br>';

    // Operator Logika | && || !
    $d = true;
    $e = false;
    echo $d && $e ? "Keduanya Benar" : "Bukan Keduanya Benar";
    echo '<br>';
    echo $d || $e ? "Salah Satu Benar" : "Keduanya Salah";
    echo '<br>';
    echo !$d ? "Bukan Benar" : "Benar";
    echo '<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>
        <?php echo "PHP di dalam HTML"; ?>
    </h1>
    <?php echo 
        "<p>HTML di dalam PHP</p>"; 
    ?>
    <h4>
        <?php
            echo $Inivariabel;
        ?>
    </h4>
</body>
</html>