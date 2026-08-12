<?php
    // Soal 1 - Tampilkan data Apel, Jeruk, Pisang
    $buah = ["Apel", "Mangga", "Jeruk", "Pisang"];
    echo $buah[0] . "<br>";
    echo $buah[2] . "<br>";
    echo $buah[3] . "<br>";
    echo "<br>";

    // Soal 2 - Ubah "BMW" menjadi "Mercedes" lalu tampilkan seluruh isi array menggunakan print_r().
    $mobil = ["Toyota", "Honda", "BMW"];
    $mobil[2] = "Mercedes";
    print_r($mobil);
    echo "<br>";
    echo "<br>";
    
    // Soal 3 - Tambahkan warna: Biru dan Kuning.
    $warna = ["Merah", "Hijau"];
    $warna[] = "Biru";
    $warna[] = "Kuning";
    print_r($warna);
    echo "<br>";
    echo "<br>";

    // Soal 4 - Tampilkan seluruh Array Mahasiswa
    $mahasiswa = [
        "Risqi",
        "2412345",
        "Teknik Informatika",
        "Bandung"
    ];
    echo "Nama: " . $mahasiswa[0] . "<br>";
    echo "NIM: " . $mahasiswa[1] . "<br>";
    echo "Prodi: " . $mahasiswa[2] . "<br>";
    echo "Alamat: " . $mahasiswa[3] . "<br>";
    echo "<br>";
    echo "<br>";

    // Soal 5 - Tampilkan seluruh Array yang ada di dalam Array
    $mahasiswa1 = [
        ["Joko", "2412345", "Teknik Informatika", "Bandung"],
        ["Andi", "2412346", "Teknik Elektro", "Jakarta"],
        ["Budi", "2412347", "Teknik Sipil", "Surabaya"]
    ];

    // Soal 6 - Tanpa mengetik angka satu per satu, gunakan foreach sehingga outputnya: Angka ke-1 adalah ...
    $angka = [10, 20, 30, 40, 50];
    foreach ($angka as $key => $value) {
        echo "Angka ke-" . ($key + 1) . " adalah " . $value . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa1 as $mhs): ?>
        <ul>
            <li>Nama: <?= $mhs[0] ?></li>
            <li>NIM: <?= $mhs[1] ?></li>
            <li>Prodi: <?= $mhs[2] ?></li>
            <li>Alamat: <?= $mhs[3] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>