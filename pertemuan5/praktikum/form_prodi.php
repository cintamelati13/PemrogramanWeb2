<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "dbsiak");

// Inisialisasi variabel
$id = "";
$kode = "";
$nama = "";
$kaprodi = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM prodi WHERE id='$id'";
    $result = $koneksi->query($query);
    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $id = $data['id'];
        $kode = $data['kode'];
        $nama = $data['nama'];
        $kaprodi = $data['kaprodi'];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Prodi</h5>
        </div>
        <div class="card-body">
            <form action="simpan_prodi.php" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $id ?>" required>
                </div>
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" value="<?= $kode ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Prodi</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>" required>
                </div>
                <div class="mb-3">
                    <label for="kaprodi" class="form-label">Kaprodi</label>
                    <input type="text" class="form-control" id="kaprodi" name="kaprodi" value="<?= $kaprodi ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="list_prodi.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
