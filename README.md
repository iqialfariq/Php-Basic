# 🧠 Penjelasan PHP
<p align="justify">
PHP (PHP: Hypertext Preprocessor) adalah bahasa pemrograman server-side yang digunakan untuk mengolah data di server dan membuat website menjadi
dinamis.
</p>

---

## 🖥️ Macam-macam output pada PHP
<p align="justify">Digunakan untuk menampilkan hasil dari PHP ke layar monitor.</p>

#### 📎 ECHO → Digunakan untuk menampilkan lebih dari satu argumen dan umumnya digunakan untuk output biasa.
```php
Contoh Penggunaan:

<?php
    $nama = "Budi";
    echo $nama; // Output: Budi
?>
```

#### 📎 PRINT → Digunakan untuk menampilkan output seperti `echo`.
```php
Contoh Penggunaan:

<?php
    $nama = "Budi";
    print $nama; // Output: Budi
?>
```

#### 📎 PRINT_R() → Digunakan untuk melihat isi array atau struktur data sederhana beserta index nya.
```php
Contoh Penggunaan:

<?php
    $buah = ["apel", "pisang", "jeruk"];
    print_r($buah); // Output: Array ( [0] => apel [1] => pisang [2] => jeruk )
?>
```

#### 📎 VAR_DUMP() → Digunakan untuk menampilkan nilai sekaligus informasi tipe datanya.
```php
Contoh Penggunaan:

<?php
    $nama = "Budi";
    $umur = 20;
    var_dump($nama, $umur); // Output: string(4) "Budi" int(20)
?>
```

---

## 🏷️ Variabel pada PHP
<p align="justify">Variabel pada PHP digunakan untuk menampung sebuah nilai atau data. Penulisan variabel pada PHP di awali dengan simbol dolar lalu
nama variabel nya apa contoh: $namavariabel.</p>

```php
Contoh Penggunaan:

<?php
    $nama = "Budi";
    $umur = 20;
    $buah = ["apel", "pisang", "jeruk"];
?>
```

---

## 🗃️ Tipe data pada PHP
<p align="justify">Tipe data pada PHP adalah jenis nilai yang akan di simpan di variabel.</p>

```php
Contoh Penggunaan:

<?php
    $nama = "Budi";        // string
    $umur = 20;            // integer
    $harga = 19.5;         // float
    $status = true;        // boolean
    $data = null;          // null
    $buah = \\\["Apel"];   // array
?>
```

---

## ⚙️ Macam-macam operator pada PHP
<p align="justify">Operator pada PHP adalah simbol yang digunakan untuk melakukan operasi terhadap suatu nilai atau variabel. Secara umum operator di
PHP itu ada 5.</p>

#### 📎 Operator Aritmatika
```text
    penjumlahan → +
    pengurangan → -
    perkalian → *
    pembagian → /
    sisa bagi (modulo) → %
    Perpangkatan → **
```

#### 📎 Operator Assignment / Penugasan
```text
    sama dengan → =
    plus sama dengan → +=
    minus sama dengan → -=
    kali sama dengan → *=
    bagi sama dengan → /=
    modulo sama dengan → %=
    titik sama dengan → .=
```

#### 📎 Operator Perbandingan
```text
    sama nilai → ==
    sama nilai dan tipe data → ===
    tidak sama → !=
    tidak sama nilai dan tipe data → !==
    lebih besar → >
    lebih kecil → <
    lebih besar atau sama dengan → >=
    lebih kecil atau sama dengan → <=
    Spaceship → <=>
```

#### 📎 Operator Logika
```text
    Operator AND → && (Semua kondisi harus benar)
    Operator OR → || (Minimal salah satu kondisi benar)
    Operator NOT → ! (Membalik nilai boolean)
```

#### 📎 Ternary
```text
    Ini operator yang digunakan sebagai bentuk singkat dari if-else.
    Contoh:

    kondisi ? nilaiJikaBenar : nilaiJikaSalah;
```

---

## ⚖️ Pengkondisian
<p align="justify">Pengkondisian (conditional statement) adalah cara program untuk menentukan tindakan berdasarkan suatu kondisi.</p>

#### 📎 IF → Digunakan untuk menjalankan kode jika suatu kondisi bernilai true.
```php
Contoh Penggunaan:

<?php
    $umur = 20;

    if ($umur >= 17) {
        echo "Sudah dewasa";
    }
    // Output: Sudah dewasa
?>
```

#### 📎 IF ELSE → Digunakan ketika ada dua kemungkinan suatu kondisi true dan false.
```php
Contoh Penggunaan:

<?php
    $umur = 15;

    if ($umur >= 17) {
        echo "Sudah dewasa";
    } else {
        echo "Belum dewasa";
    }
    // Output: Belum dewasa
?>
```

#### 📎 IF ELSE IF ELSE → Digunakan ketika ada lebih dari dua kemungkinan suatu kondisi true dan false.
```php
Contoh Penggunaan:

<?php
    $nilai = 80;

    if ($nilai >= 90) {
        echo "A";
    } else if ($nilai >= 80) {
        echo "B";
    } else if ($nilai >= 70) {
        echo "C";
    } else {
        echo "D";
    }
    // Output: B
?>
```

#### 📎 NESTED IF → Ini adalah if di dalam if atau lebih umum nya pengkondisian bersarang.
```php
Contoh Penggunaan:

<?php
    $umur = 20;
    $punyaKTP = true;
    
    if ($umur >= 17) {
        if ($punyaKTP) {
            echo "Boleh mendaftar";
        }
    }
    // Output: Boleh mendaftar
?>
```

#### 📎 SWITCH → Digunakan ketika kita ingin membandingkan satu nilai dengan beberapa kemungkinan nilai.
```php
Contoh Penggunaan:

<?php
    $hari = "Senin";

    switch ($hari) {
        case "Senin":
            echo "Hari kerja";
            break;
    
        case "Sabtu":
            echo "Hari libur";
            break;
    
        case "Minggu":
            echo "Hari libur";
            break;
    
        default:
            echo "Hari tidak diketahui";
    }
    // Output: Hari kerja
?>
```

#### 📎 MATCH → Digunakan buat membandingkan satu nilai dengan beberapa kemungkinan nilai (mirip switch).
```php
Contoh Penggunaan:

<?php
    $hari = "Senin";

    $hasil = match ($hari) {
        "Senin" => "Hari kerja",
        "Sabtu", "Minggu" => "Hari libur",
        default => "Tidak diketahui"
    };
    
    echo $hasil;
    // Output: Hari kerja
?>
```

---

## 🔄 Perulangan
<p align="justify">Perulangan (loop) adalah proses menjalankan kode berulang kali selama kondisi tertentu masih terpenuhi.</p>

#### 📎 FOR → Digunakan ketika kita mengetahui berapa kali perulangan ingin dilakukan.
```php
Contoh Penggunaan:

<?php
    for ($i = 1; $i <= 5; $i++) {
        echo $i;
    }
    // Output: 12345
?>
```

#### 📎 WHILE → Digunakan untuk melakukan perulangan selama kondisi bernilai true.
```php
Contoh Penggunaan:

<?php
    $i = 1;
    
    while ($i <= 5) {
        echo $i;
        $i++;
    }
    // Output: 12345
?>
```

#### 📎 DO...WHILE → Digunakan agar kode dijalankan terlebih dahulu, baru kondisi diperiksa.
```php
Contoh Penggunaan:

<?php
    $i = 1;
    
    do {
        echo $i;
        $i++;
    } while ($i <= 5);
    // Output: 12345
?>
```

#### 📎 FOREACH → Digunakan untuk mengulang berdasarkan kondisi atau angka, foreach lebih khusus digunakan untuk mengulang data dalam array.
```php
Contoh Penggunaan:

<?php
    $buah = ["Apel", "Mangga", "Jeruk"];

    foreach ($buah as $b) {
        echo $b;
    }
    // Output: Apel Mangga Jeruk
?>
```

---

## 🧩 Function
<p align="justify">Function adalah sekumpulan kode yang dibuat untuk melakukan tugas tertentu dan bisa kita panggil kapan saja ketika dibutuhkan.
Penulisan function di PHP di awali dengan keyword function lalu nama fungsi nya apa
contoh: function tambah().</p>

```php
Contoh Penggunaan:

<?php
    function sapa() {
        echo "Halo, selamat datang!";
    }
    sapa();
    // Output: Halo, selamat datang!
?>
```

---

## 🧰 Built in Function pada PHP
<p align="justify">Built-in Function adalah function yang sudah disediakan oleh PHP. Jadi kita nggak perlu membuat function-nya sendiri, tinggal
memanggilnya sesuai kebutuhan.</p>

#### 📎 Built in Function untuk waktu.
```php
    date() → Digunakan untuk menampilkan tanggal/waktu dengan format tertentu.
    time() → Digunakan untuk menghasilkan Unix timestamp saat ini.
    mktime() → Digunakan untuk membuat timestamp dari tanggal/waktu tertentu.
    strtotime() → Digunakan untuk mengubah string tanggal/waktu menjadi timestamp.

    format penting:
    d = tanggal 2 digit
    m = bulan 2 digit
    Y = tahun 4 digit
    l = nama hari lengkap
    H = jam 24 jam
    i = menit
    s = detik
```

#### 📎 Built in Function untuk string.
```php
    strlen() → Digunakan untuk menghitung panjang string.
    strcmp() → Digunakan untuk membandingkan dua string.
    explode() → Digunakan untuk memecah string menjadi array berdasarkan delimiter.
    strtolower() → Digunakan untuk mengubah string menjadi huruf kecil.
    stripslashes() → Digunakan untuk menghapus backslash dari string.
    htmlspecialchars() → Digunakan untuk mengubah karakter khusus HTML menjadi bentuk aman untuk ditampilkan sebagai teks.
```

#### 📎 Built in Function untuk utility Function.
```php
    isset() → Digunakan untuk mengecek apakah variabel/key tersedia dan nilainya bukan null.
    empty() → Digunakan untuk mengecek apakah sebuah nilai dianggap kosong.
    die() → Digunakan untuk menghentikan eksekusi script.
    sleep() → Digunakan untuk menghentikan eksekusi script selama beberapa detik.
    count() → Digunakan untuk menghitung jumlah elemen array.
```

---

## 📦 Array pada PHP
<p align="justify">Array adalah tipe data yang digunakan untuk menyimpan banyak nilai dalam satu variabel. Dalam PHP array ada tiga jenis yaitu Indexed
Array atau array numerik, Associative Array, dan Multidimensional Array.</p>

#### 📎 Array Numerik → Array numerik adalah array yang setiap elemennya memiliki index berupa angka.
```php
    <?php
        $buah = ["Apel", "Mangga", "Jeruk"];
    
        foreach ($buah as $b) {
            echo $b;
        }
        // Output: Apel Mangga Jeruk
    ?>
```

#### 📎 Array Associative → Array associative adalah array yang index-nya berupa key yang kita tentukan sendiri.
```php
    <?php
        $data = [
            "nama" => "Budi",
            "umur" => 20,
            "jurusan" => "Mekatronika"
        ];
        echo $data["jurusan"];
        // Output: Mekatronika
    ?>
```

#### 📎 Array Multidimensi → Array multidimensi adalah array yang di dalamnya terdapat array lainnya.
```php
    <?php
        $siswa = [
            [
                "nama" => "Rizal",
                "umur" => 20
            ],
            [
                "nama" => "Budi",
                "umur" => 21
            ]
        ];
        
        foreach ($siswa as $data) {
            echo "Nama : " . $data["nama"];
            echo "<br>";
        
            echo "Umur : " . $data["umur"];
            echo "<br><br>";
        }
        // Output:
        // Nama : Rizal
        // Umur : 20
            
        // Nama : Budi
        // Umur : 21
    ?>
```

---

## 🌐 Variabel Superglobal pada PHP
<p align="justify">Variabel superglobal adalah variabel bawaan PHP yang bisa diakses dari mana saja dalam script PHP, termasuk di dalam function, tanpa
perlu menggunakan global.</p>

```php
    $_GET → Digunakan untuk mengambil data dari URL.
    $_POST → Digunakan untuk mengambil data dari form dengan method POST.
    $_SESSION → Digunakan untuk menyimpan data selama session berlangsung.
    $_COOKIE → Digunakan untuk menyimpan dan mengambil data cookie.
    $_SERVER → Digunakan untuk mendapatkan informasi server dan request.
    $_FILES → Digunakan untuk mengakses file yang di-upload.
    $_REQUEST → Digunakan untuk mengambil data dari request.
    $_ENV → Digunakan untuk mengakses environment variable.
```

---

## 🗄️ Database pada PHP
<p align="justify">Database adalah tempat untuk menyimpan dan mengelola data secara terstruktur.</p>

#### 📎mysqli_connect() → Digunakan untuk membuat koneksi PHP dengan database MySQL.
```php
Contoh Penggunaan:

    $conn = mysqli_connect("localhost", "root", "", "db_toko");
```

#### 📎mysqli_query() → Digunakan untuk menjalankan SQL query pada database seperti SELECT, INSERT, UPDATE, dan DELETE.
```php
Contoh Penggunaan:

    $result = mysqli_query($conn, "SELECT * FROM users");
```

#### 📎mysqli_fetch_assoc() → Digunakan untuk mengambil satu baris hasil query dalam bentuk associative array.
```php
Contoh Penggunaan:

    $data = mysqli_fetch_assoc($result);
    echo $data["nama"];
```

#### 📎mysqli_fetch_row() → Digunakan untuk mengambil satu baris hasil query dalam bentuk indexed array.
```php
Contoh Penggunaan:

    $data = mysqli_fetch_row($result);
    echo $data[0];
```

#### 📎mysqli_fetch_array() → Digunakan untuk mengambil satu baris hasil query sebagai array yang bisa menggunakan index numerik maupun associative.
```php
Contoh Penggunaan:

    $data = mysqli_fetch_array($result);

    echo $data["nama"];
    echo $data[0];
```

#### 📎mysqli_num_rows() → Digunakan untuk menghitung jumlah baris hasil query.
```php
Contoh Penggunaan:

    $result = mysqli_query($conn, "SELECT * FROM users");
    echo mysqli_num_rows($result);
```

#### 📎mysqli_error() → Digunakan untuk mendapatkan informasi error dari koneksi/query MySQLi.
```php
Contoh Penggunaan:

    $result = mysqli_query($conn, "SELECT * FROM tabel_salah");
    if (!$result) {
        echo mysqli_error($conn);
    }
```

#### 📎mysqli_close() → Digunakan untuk menutup koneksi database.
```php
Contoh Penggunaan:

    mysqli_close($conn);
```
