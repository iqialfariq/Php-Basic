<?php
    // Array Numerik
    $mahasiswa = [
        ["John Doe", "1209726152", "johndoe@example.com", "Computer Science"],
        ["Jane Smith", "1209726153", "janesmith@example.com", "Mathematics"],
        ["Bob Johnson", "1209726154", "bobjohnson@example.com", "Physics"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- Cara saya sendiri -->
    <?php foreach ($mahasiswa as $siswa): ?>
    <ul>
        <li>Nama: <?= $siswa[0]; ?></li>
        <li>Nrp: <?= $siswa[1]; ?></li>
        <li>Email: <?= $siswa[2]; ?></li>
        <li>Jurusan: <?= $siswa[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>