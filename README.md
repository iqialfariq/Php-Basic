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
