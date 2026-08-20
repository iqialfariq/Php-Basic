# 🧠 Penjelasan PHP
<p align="justify">
PHP (PHP: Hypertext Preprocessor) adalah bahasa pemrograman server-side yang digunakan untuk mengolah data di server dan membuat website menjadi dinamis.
</p>

---

## 🧭 Macam-macam output pada PHP
<p align="justify">Digunakan untuk menampilkan hasil dari PHP ke layar monitor.</p>

```php
echo → Digunakan untuk menampilkan lebih dari satu argumen dan umumnya digunakan untuk output biasa.

Contoh Penggunaan:

<?php
    $nama = "Budi";
    echo $nama; // Output: Budi
?>
```

```php
print → Digunakan untuk menampilkan output seperti `echo`

Contoh Penggunaan:

<?php
    $nama = "Budi";
    print $nama; // Output: Budi
?>
```

```php
print_r() → Digunakan untuk melihat isi array atau struktur data sederhana beserta index nya.

Contoh Penggunaan:

<?php
    $buah = ["apel", "pisang", "jeruk"];
    print_r($buah); // Output: Array ( [0] => apel [1] => pisang [2] => jeruk )
?>
```

```php
var_dump() →  Digunakan untuk menampilkan nilai sekaligus informasi tipe datanya.

Contoh Penggunaan:

<?php
    $nama = "Budi";
    $umur = 20;
    var_dump($nama, $umur); // string(4) "Budi" int(20)
?>
```

---

## ✏️ Variabel pada PHP
<p align="justify">Variabel pada PHP digunakan untuk menampung sebuah nilai atau data. Penulisan variabel pada PHP di awali dengan simbol dolar lalu nama variabel nya apa contoh: $namavariabel</p>

```php
Contoh Penggunaan:

<?php
    $nama = "Budi";
    $umur = 20;
    $buah = ["apel", "pisang", "jeruk"];
?>
```

---

## ✏️ Tipe data pada PHP
<p align="justify">Tipe data pada PHP adalah jenis nilai yang akan di simpan di variabel</p>

```php
Contoh Penggunaan:

<?php
    $nama = "Risqi";       // string
    $umur = 20;            // integer
    $harga = 19.5;         // float
    $status = true;        // boolean
    $data = null;          // null
    $buah = \\\["Apel"];   // array
?>
```

---

## ✏️ Macam-macam operator pada PHP
<p align="justify">Operator pada PHP adalah simbol yang digunakan untuk melakukan operasi terhadap suatu nilai atau variabel. Secara umum operator di
PHP itu ada 5</p>

### ✏️ Operator Aritmatika
```text
    penjumlahan → +
    pengurangan → -
    perkalian → *
    pembagian → /
    sisa bagi (modulo) → %
    Perpangkatan → **
```

### ✏️ Operator Assignment / Penugasan
```text
    sama dengan → =
    plus sama dengan → +=
    minus sama dengan → -=
    kali sama dengan → *=
    bagi sama dengan → /=
    modulo sama dengan → %=
    titik sama dengan → .=
```

### ✏️ Operator Perbandingan
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

### ✏️ Operator Logika
```text
    Operator AND → && (Semua kondisi harus benar)
    Operator OR → || (Minimal salah satu kondisi benar)
    Operator NOT → ! (Membalik nilai boolean)
```

### ✏️ Ternary
```text
    Ini operator yang digunakan sebagai bentuk singkat dari if-else.
    Contoh:
    kondisi ? nilaiJikaBenar : nilaiJikaSalah;
```
---
