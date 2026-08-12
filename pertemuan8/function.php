<?php
    // Koneksi halaman ke databse
    $conn = mysqli_connect("localhost", "root", "", "supercar");

    // Function query untuk mengambil database
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
?>