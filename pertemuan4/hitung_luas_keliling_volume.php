<?php

// Kelas BangunRuang untuk menghitung luas, keliling, dan volume berbagai bangun
class BangunRuang {
    // Fungsi untuk menghitung luas persegi
    public function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
    
    // Fungsi untuk menghitung keliling persegi
    public function kelilingPersegi($sisi) {
        return 4 * $sisi;
    }
    
    // Fungsi untuk menghitung luas lingkaran
    public function luasLingkaran($jariJari) {
        return pi() * $jariJari * $jariJari;
    }
    
    // Fungsi untuk menghitung keliling lingkaran
    public function kelilingLingkaran($jariJari) {
        return 2 * pi() * $jariJari;
    }
    
    // Fungsi untuk menghitung volume kubus
    public function volumeKubus($sisi) {
        return $sisi * $sisi * $sisi;
    }
    
    // Fungsi untuk menghitung volume bola
    public function volumeBola($jariJari) {
        return (4/3) * pi() * pow($jariJari, 3);
    }
}

// Membuat objek dari kelas BangunRuang
$bangun = new BangunRuang();

// Menampilkan hasil perhitungan dalam format vertikal
echo "Luas Persegi: " . $bangun->luasPersegi(4) . "<br>";
echo "Keliling Persegi: " . $bangun->kelilingPersegi(4) . "<br>";
echo "Luas Lingkaran: " . $bangun->luasLingkaran(7) . "<br>";
echo "Keliling Lingkaran: " . $bangun->kelilingLingkaran(7) . "<br>";
echo "Volume Kubus: " . $bangun->volumeKubus(4) . "<br>";
echo "Volume Bola: " . $bangun->volumeBola(7) . "<br>";

?>
