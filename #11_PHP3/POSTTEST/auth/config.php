<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_pt_php3';

    $conn = mysqli_connect($host, $user, $pass, $db) or die("Gagal koneksi ke database!");
?>