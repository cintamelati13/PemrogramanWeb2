<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Form Belanja Online</h2>
        <form method="POST" action="proses_belanja.php">
            <div class="mb-3">
                <label class="form-label">Customer</label>
                <input type="text" class="form-control" name="customer" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Produk Pilihan</label><br>
                <input type="radio" name="produk" value="TV" required> TV
                <input type="radio" name="produk" value="Kulkas"> Kulkas
                <input type="radio" name="produk" value="Mesin Cuci"> Mesin Cuci
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Beli</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>
            <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
        </form>
    </div>
</body>
</html>
