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
        // Konek ke database
        global $conn;
        // Proses ambil data dari tiap element dalam form
        $brand = htmlspecialchars($data['brand']);
        $type = htmlspecialchars($data['type']);
        $color = htmlspecialchars($data['color']);
        $price = htmlspecialchars($data['price']);

        // Gambar di ambil setelah kita berhasil upload file nya 
        // Fungsi upload gambar
        $picture = upload();
        if(!$picture) {
            return false;
        }

        // query insert data
        $query = "INSERT INTO supercars VALUES ('', '$brand', '$type', '$color', '$price', '$picture')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload() {
        // Ambil isi dari $_FILES
        $fileName = $_FILES['picture']['name'];
        $fileSize = $_FILES['picture']['size'];
        $error = $_FILES['picture']['error'];
        $tmpName = $_FILES['picture']['tmp_name'];

        // Cek apakah tidak ada gambar yang di upload
        if ($error === 4) {
            echo 
            "<script>
                alert('Pilih gambar terlebih dahulu');
            </script>";
            return false;
        }

        // Cek yang di upload gambar atau bukan
        $pictureValid = ['jpeg','jpg', 'png'];
        $pictureExten = explode('.', $fileName);

        $pictureExten = strtolower(end($pictureExten));

        if (!in_array($pictureExten, $pictureValid)) {
            echo 
            "<script>
                alert('Yang di upload bukan gambar');
            </script>";
            return false;
        }

        // Cek ukuran file
        if ($fileSize > 500 * 1024 * 1024) {
            echo 
            "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";
            return false;
        }

        // Cek apakah ada exten gambar yang sama kalo ada ubah exten nya dengan uniq id
        $newFileName = uniqid() . '.' . $pictureExten;
        // Pindahkan file ke folder tujuan
        move_uploaded_file($tmpName, 'img/' . $newFileName);

        return $newFileName;
    }

    function delete($id) {
        // Konek ke database
        global $conn;
        // Jalankan fungsi delete
        mysqli_query($conn, "DELETE FROM supercars WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        // Konek ke database
        global $conn;
        // Proses ambil data dari tiap element dalam form
        $id = $data['id'];
        $brand = htmlspecialchars($data['brand']);
        $type = htmlspecialchars($data['type']);
        $color = htmlspecialchars($data['color']);
        $price = htmlspecialchars($data['price']);
        $oldpicture = htmlspecialchars($data['oldpicture']);

        // Cek apakah user pilih gambar baru atau lama
        if($_FILES['picture']['error'] === 4) {
            $picture = $oldpicture;
        } else {
            $picture = upload();
        }

        // query update data
        $query = "UPDATE supercars SET 
            brand = '$brand', 
            type = '$type', 
            color = '$color', 
            price = '$price', 
            picture = '$picture' WHERE id = $id";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        // Konek ke database
        global $conn;
        // query update yang di ketikan user
        $query = 
            "SELECT * FROM supercars WHERE 
            brand LIKE '%$keyword%' 
            OR type LIKE '%$keyword%' 
            OR color LIKE '%$keyword%'";
        // Kembalikan function query dengan parameter variabel query
        return query($query);
    }
?>