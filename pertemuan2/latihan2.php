<?php
    // Soal 1
    // Gunakan for untuk menampilkan: Angka ke-1 DST.
    for ($i = 1; $i <= 10; $i++) {
        echo "Angka ke-" . $i . "<br>";
    }
    echo "<br>";

    // Soal 2
    // Gunakan while untuk menampilkan hanya angka genap.
    $j = 1;
    while ($j <= 10) {
        if ($j % 2 == 0) {
            echo "Angka genap: " . $j . "<br>";
        }
        $j++;
    }
    echo "<br>";

    // Soal 3
    // Gunakan do...while untuk menampilkan hanya angka ganjil.
    $k = 1;
    do {
        echo "Angka ganjil: " . $k . "<br>";
        $k += 2;
    } while ($k <= 10);
    echo "<br>";

    // Soal 4
    // Buatkan bintang sebanyak 5 baris dan 5 kolom dengan for
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br>";
        
    // Soal 5
    // Buatkan bintang sebanyak 5 baris dan relative kolom dengan for
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br>";

    // Soal 6
    // Buatkan bintang sebanyak 5 baris dan relative kolom dengan for
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br>";

    // Soal 7
    // Hasil perkalian diperoleh dari operasi matematika.
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            echo "$i X $j = " . ($i * $j) . "<br>";
        }
        echo "<br>";
    }
    echo "<br>";

    // Soal 8
    // Buatkan bintang sebanyak 5 baris dan relative kolom dengan for
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "#";
        }
        echo "<br>";
    }
    echo "<br>";

    // Soal 9
    // Jika umur 18 atau lebih, tampilkan: Anda sudah dewasa.
    // Jika kurang dari 18: Anda masih di bawah umur.
    $umur = 20;
    if ($umur >= 18) {
        echo "Anda sudah dewasa.";
    } else {
        echo "Anda masih di bawah umur.";
    }
    echo "<br>";

    // Soal 10
    // Jika nilai lebih besar atau sama dengan 75 | Lulus | Tidak Lulus
    $nilai = 75;
    if ($nilai >= 75) {
        echo "Kamu Lulus";
    } else {
        echo "Kamu Tidak Lulus";
    }
    echo "<br>";

    // Soal 11
    // Jika password sama dengan: | admin123 | Login Berhasil | Password Salah
    $password = "admin123";
    if ($password == "admin123") {
        echo "Login Berhasil";
    } else if ($password == "user123") {
        echo "Login Berhasil (User)";
    } else {
        echo "Password Salah";
    }
    echo "<br>";

    // Soal 12
    // Ketentuan Nilai: 90 - 100 = A | 80 - 89  = B | 70 - 79  = C | <70      = D
    $nilai = 90;
    if ($nilai >= 90 && $nilai <= 100) {
        echo "Nilai Anda: A";
    } else if ($nilai >= 80 && $nilai <= 89) {
        echo "Nilai Anda: B";
    } else if ($nilai >= 70 && $nilai <= 79) {
        echo "Nilai Anda: C";
    } else {
        echo "Nilai Anda: D";
    }
    echo "<br>";

    // Soal 13
    // Jika stok masih ada. Barang Tersedia | Barang Habis.
    $stok = 5;
    echo ($stok >= 0) ? "Barang Tersedia" : "Barang Habis";
    echo "<br>";

    // Soal 14
    // Tampilkan Bahwa hari selain senin - jumat adalah hari libur.
    $hari = "Senin";
    switch ($hari) {
        case "Senin":
        case "Selasa":
        case "Rabu":
        case "Kamis":
        case "Jumat":
            echo "Hari Senin - Jumat adalah hari kerja";
            break;
        default:
            echo "Hari Sabtu - Minggu adalah hari libur";
    }
    echo "<br>";

    // Soal 15
    // Kalkulator sederhana 20 x 5.
    $a = 20;
    $b = 5;
    $operator = "*";
    switch ($operator) {
        case "+":
            echo "$a + $b = " . ($a + $b);
            break;
        case "-":
            echo "$a - $b = " . ($a - $b);
            break;
        case "*":
            echo "$a x $b = " . ($a * $b);
            break;
        case "/":
            echo "$a : $b = " . ($a / $b);
            break;
        default:
            echo "Operator tidak valid";
    }
?>