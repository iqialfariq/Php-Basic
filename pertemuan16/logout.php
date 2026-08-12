<?php
    session_start();
    // Menghapus session
    session_unset();
    session_destroy();

    // Menghapus cookie
    setcookie('unid', '', time() - 3600);
    setcookie('keyus', '', time() - 3600);

    header("Location: login.php");
    exit;
?>