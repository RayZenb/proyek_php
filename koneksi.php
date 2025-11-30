<?php
// Konfigurasi database
$host = 'localhost';
$dbname = 'proyek';
$username = 'root';
$password = 'Bintang12345678@';

try {
    // Koneksi menggunakan PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // Set error mode ke exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set default fetch mode
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>