<?php

// Kelas NilaiMahasiswa untuk menyimpan data mahasiswa dan menghitung grade
class NilaiMahasiswa {
    private $nama;
    private $nim;
    private $nilai;

    // Konstruktor untuk inisialisasi data mahasiswa
    public function __construct($nama, $nim, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->nilai = $nilai;
    }

    // Fungsi untuk menentukan grade berdasarkan nilai
    public function getGrade() {
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 75) {
            return 'B';
        } elseif ($this->nilai >= 65) {
            return 'C';
        } elseif ($this->nilai >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }

    // Fungsi untuk menampilkan hasil nilai mahasiswa
    public function tampilkanHasil() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Nilai: " . $this->nilai . "<br>";
        echo "Grade: " . $this->getGrade() . "<br>";
    }
}

// Contoh penggunaan
$mahasiswa = new NilaiMahasiswa("Budi", "123456", 80);
$mahasiswa->tampilkanHasil();

?>
