<?php
    // Koneksi halaman ke databse
    $conn = mysqli_connect("localhost", "root", "", "supercar");

    // Function query untuk mengambil database
    function query($query) {
        // Konek ke database
        global $conn;
        // Masuk kedatabase lalu kedalam tabel abis itu simpan data nya
        $result = mysqli_query($conn, $query);
        // Array penampung
        $rows = [];
        // Ketika data result di ambil simpan ke variabel rows
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        // Kembalikan array rows
        return $rows;
    }

    function tambah($data) {
        global $conn;
        // Proses ambil data dari tiap element dalam form
        $brand = htmlspecialchars($data['brand']);
        $type = htmlspecialchars($data['type']);
        $color = htmlspecialchars($data['color']);
        $price = htmlspecialchars($data['price']);
        $picture = htmlspecialchars($data['picture']);

        // query insert data
        $query = "INSERT INTO supercars VALUES ('', '$brand', '$type', '$color', '$price', '$picture')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function delete($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM supercars WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>