<?php 

$servername = 'localhost';
$username = 'root';
$password = ''; // Jika tidak ada password di kosongkan saja
$database = 'db_sanggarkusuma';

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Mengecek koneksi
if(!$koneksi) {
    die('Connection Failed: ' . mysqli_connect_error());
}
?>
