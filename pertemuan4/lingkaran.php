<?php

// Kelas Lingkaran untuk menghitung luas dan keliling lingkaran
class Lingkaran {
    private $jariJari;

    // Konstruktor untuk inisialisasi nilai jari-jari
    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    // Fungsi untuk menghitung luas lingkaran
    public function hitungLuas() {
        return pi() * pow($this->jariJari, 2);
    }

    // Fungsi untuk menghitung keliling lingkaran
    public function hitungKeliling() {
        return 2 * pi() * $this->jariJari;
    }

    // Fungsi untuk menampilkan hasil perhitungan
    public function tampilkanHasil() {
        echo "Jari-jari: " . $this->jariJari . "<br>";
        echo "Luas: " . $this->hitungLuas() . "<br>";
        echo "Keliling: " . $this->hitungKeliling() . "<br>";
    }
}

// Contoh penggunaan
$lingkaran = new Lingkaran(7);
$lingkaran->tampilkanHasil();

?>
