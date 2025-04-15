<?php
  require_once 'dbkoneksi.php';

  // 1. Query ambil data
  $sql = "SELECT * FROM mahasiswa ORDER BY thn_masuk DESC";
  
  // 2. Eksekusi query
  $rs = $dbh->query($sql);

  // 3. Tampilkan hasil
  foreach($rs as $row){
    echo "<br>".$row['nim'].' - '.$row['nama'];
  }
?>
