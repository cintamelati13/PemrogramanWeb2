<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 1</title>
</head>
<body>
    <h2>Kalkulator</h2>
    <form action="" method="post">
        <label for="">Angka 1:</label>
        <input type="number" name="angka1" required>
        <br>
        <label for="">Angka 2:</label>
        <input type="number" name="angka2" required>
        <br>
        <label for="">Operasi:</label>
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        switch ($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "<h3>Error: Division by zero</h3>";
                    exit;
                }
                break;
            default:
                echo "<h3>Error: Invalid operation</h3>";
                exit;
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>

</body>
</html>