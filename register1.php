<?php
session_start();

// Konfigurasi database
$host = 'localhost';
$dbname = 'proyek';
$username = 'root';
$password = 'Bintang12345678@';

// Variabel untuk form
$fullname = "";
$alamat = "";
$email = "";
$phone = "";

try {
    // Koneksi menggunakan PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $fullname = trim($_POST['fullname']);
    $alamat = trim($_POST['alamat']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    
    // Validasi data
    if (empty($fullname) || empty($alamat) || empty($email) || empty($phone)) {
        echo "<script>alert('Semua field harus diisi!'); window.location.href='Register.php';</script>";
        exit();
    }
    
    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid!'); window.location.href='Register.php';</script>";
        exit();
    }
    
    try {
        // Cek apakah email sudah terdaftar
        $stmt = $conn->prepare("SELECT * FROM pendaftar WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            echo "<script>alert('Email sudah terdaftar!'); window.location.href='Register.php';</script>";
            exit();
        }
        
        // Insert data ke tabel pendaftar
        $sql = "INSERT INTO pendaftar (fullname, alamat, email, phone, created_at) 
                VALUES (:fullname, :alamat, :email, :phone, NOW())";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        
        if ($stmt->execute()) {
            echo "<script>
                    alert('Pendaftaran berhasil! Terima kasih telah mendaftar.');
                    window.location.href='dd.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Pendaftaran gagal! Silakan coba lagi.');
                    window.location.href='Register.php';
                  </script>";
        }
    } catch(PDOException $e) {
        echo "<script>
                alert('Error: " . $e->getMessage() . "');
                window.location.href='Register.php';
              </script>";
    }
} else {
    // Jika diakses langsung tanpa POST
    header("Location: Register.php");
    exit();
}

$conn = null;
?>