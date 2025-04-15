<?php
// Menghubungkan dengan file dbkoneksi.php
require_once 'dbkoneksi.php';

// Menangani proses form berdasarkan apakah ada id atau tidak
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ?? '';  // Ambil id pasien jika ada
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $kelurahan = $_POST['kelurahan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    // Query untuk insert data pasien baru atau update jika ada id
    if (empty($id)) {
        // Insert data baru
        $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, kelurahan, alamat, email) 
                VALUES (:kode, :nama, :tmp_lahir, :tgl_lahir, :gender, :kelurahan, :alamat, :email)";
    } else {
        // Update data pasien berdasarkan id
        $sql = "UPDATE pasien SET kode = :kode, nama = :nama, tmp_lahir = :tmp_lahir, tgl_lahir = :tgl_lahir, 
                gender = :gender, kelurahan = :kelurahan, alamat = :alamat, email = :email 
                WHERE id = :id";
    }

    // Menyiapkan statement
    $stmt = $dbh->prepare($sql);

    // Bind parameter
    $stmt->bindParam(':kode', $kode);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':tmp_lahir', $tmp_lahir);
    $stmt->bindParam(':tgl_lahir', $tgl_lahir);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':kelurahan', $kelurahan);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':email', $email);

    // Jika ada id, bind id untuk update
    if (!empty($id)) {
        $stmt->bindParam(':id', $id);
    }

    // Menjalankan query
    try {
        if ($stmt->execute()) {
            echo "Data pasien berhasil disimpan!";
            // Redirect ke halaman data pasien setelah simpan/update berhasil
            header("Location: data_pasien.php");
            exit;
        } else {
            echo "Gagal menyimpan data pasien.";
        }
    } catch (PDOException $e) {
        // Menangkap error jika ada masalah saat eksekusi query
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
}
?>
