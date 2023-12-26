<?php
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "211180_rumput"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host , $username , $password , $database);
// $koneksi = new mysqli($host, $username, $password, $database);
session_start();

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}



