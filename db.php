<?php
$host = "localhost";
$user = "root";       
$pass = "";           
$db   = "portfolio_db"; // Pastikan nama database ini sama di phpMyAdmin

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>