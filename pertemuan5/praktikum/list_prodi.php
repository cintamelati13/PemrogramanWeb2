<?php
require_once 'dbkoneksi.php';

try {
    $sql = "SELECT * FROM prodi"; 
    $rs = $dbh->query($sql);

    foreach($rs as $row){
        echo "<br>".$row['kode'] .' - '.$row['nama']; 
    }
} catch (PDOException $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>

<table border="1" width="100%">
