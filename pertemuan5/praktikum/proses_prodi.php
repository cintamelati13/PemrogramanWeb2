<?php
require_once 'dbkoneksi.php';

echo "Koneksi berhasil!";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['proses'])) {
    // 1) Tangkap data dari form
    $_kode     = $_POST['kode'] ?? '';
    $_nama     = $_POST['nama'] ?? '';
    $_kaprodi  = $_POST['kaprodi'] ?? '';
    $_proses   = $_POST['proses'] ?? '';

    $sql = '';
    $ar_data = [];

    if ($_proses == "Simpan" && $_kode && $_nama && $_kaprodi) {
        $sql = "INSERT INTO prodi(kode, nama, kaprodi) VALUES (?, ?, ?)";
        $ar_data = [$_kode, $_nama, $_kaprodi];
    } elseif ($_proses == "Update" && !empty($_POST['id_edit'])) {
        $id_edit = $_POST['id_edit'];
        $sql = "UPDATE prodi SET kode=?, nama=?, kaprodi=? WHERE id=?";
        $ar_data = [$_kode, $_nama, $_kaprodi, $id_edit];
    } elseif ($_proses == "Hapus" && !empty($_POST['id_hapus'])) {
        $id_hapus = $_POST['id_hapus'];
        $sql = "DELETE FROM prodi WHERE id=?";
        $ar_data = [$id_hapus];
    }

    // Jalankan query jika SQL tersedia
    if (!empty($sql)) {
        try {
            $stmt = $dbh->prepare($sql);
            $stmt->execute($ar_data);
            header('Location: list_prodi.php');
            exit;
        } catch (PDOException $e) {
        }
    }
}
?>
