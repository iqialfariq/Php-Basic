<?php
    // Koneksi halaman ini dengan function
    require "function.php";

    // Tangkap url dengan key id dengan get lalu simpan ke variabe;
    $id = $_GET['id'];
    // Cek apakah data berhasil di hapus atau tidak
    if(delete($id) > 0) {
        echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'latihan1.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'latihan1.php';
            </script>
        ";
    }
?>