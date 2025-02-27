<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Detail Belanja</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            // Harga produk
            $harga_produk = [
                "TV" => 3000000,
                "Kulkas" => 4000000,
                "Mesin Cuci" => 2500000
            ];

            // Menghitung total harga
            $total = $harga_produk[$produk] * $jumlah;

            echo "<p><strong>Nama Customer:</strong> $customer</p>";
            echo "<p><strong>Produk Pilihan:</strong> $produk</p>";
            echo "<p><strong>Jumlah Beli:</strong> $jumlah</p>";
            echo "<p><strong>Total Harga:</strong> Rp " . number_format($total, 0, ',', '.') . "</p>";
        } else {
            echo "<p class='text-danger'>Akses tidak diizinkan!</p>";
        }
        ?>
        <a href="form_belanja.php" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
