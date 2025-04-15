<?php
require_once 'dbkoneksi.php';

try {
    $sql = "SELECT * FROM prodi"; // Ganti 'prodi' jika nama tabelnya beda
    $rs = $dbh->query($sql);

    foreach($rs as $row){
        echo "<br>".$row['kode'] .' - '.$row['nama']; // Sesuaikan dengan nama kolom sebenarnya
    }
} catch (PDOException $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>

<table border="1" width="100%">
