<?php
    // Pertemuan 3 - Function

    // Builtin Function
    // Date / Time
    // echo date("d M Y", time() - 60 * 60 * 24 * 100);

    // Urutan MKTIME: jam, menit, detik, bulan, tanggal, tahun
    // echo date ("d M Y", mktime(0, 0, 0, 4, 10, 2004));
    // echo "<br>";
    
    // Urutan STRTOTIME: tanggal, bulan, tahun
    // echo date("d M Y", strtotime("10 Apr 2004"));
    // echo "<br>";

    // String
    // Strlen | Menghitung jumlah karakter
    $text = "Hello, World!";
    echo "Jumlah karakter dari variabel \$text adalah: " . strlen($text);
    echo "<br>";

    // Strcmp | Membandingkan dua string
    $motor = "Motor";
    $mobil = "Mobil";
    echo "Perbandingan string: " . strcmp($motor, $mobil);
    echo "<br>";

    // Explode | Memecah string menjadi array
    $buah = "Apel,Mangga,Pisang";
    $data = explode(",", $buah);
    print_r($data);
    echo "<br>";

    // Htmlspecialchars | Mengubah karakter HTML jadi aman ditampilkan

    // Utility
    // var_dump() | Untuk melihat isi sebuah variabel secara lengkap
    $Supercar = "Lamborghini";
    var_dump($Supercar);
    echo "<br>";
    
    // isset() | Untuk mengecek apakah variabel sudah dideklarasikan
    // empty() | Untuk mengecek apakah variabel kosong
    // Die | Untuk menghentikan eksekusi script
    // Sleep | Untuk memberhentikan eksekusi script selama beberapa detik

    // User-defined-function

?>