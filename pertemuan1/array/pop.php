<?php
$siswa = ["Tian", "Asep",
          "Ahong", "Cipe"];

//Menampilkan array awal
echo "<br>Array awal : <br>";
print_r($siswa);

//Menghapus elemen terakhir dari array
$orang_terakhir = array_pop($siswa);

//Menampilkan elemen yang dihapus
echo "<br>Elemen yang akan dihapus" .$orang_terakhir;

//Menampilkan array setelah penghapusan 
echo "<br>Array setelah penghapusan : <br>";
print_r($siswa);
?>