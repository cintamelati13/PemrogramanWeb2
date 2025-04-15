<?php
$host = 'localhost';
$db   = 'dbsiak';  // pastikan ini sesuai dengan nama database
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $dbh = new PDO($dsn, $user, $pass, $options);
    echo "Koneksi berhasil!";  // Pastikan ini ditampilkan jika koneksi berhasil
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
