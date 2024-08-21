<?php
function hitungHargaTotal($jumlahBuku) {
    $hargaPerEksemplar = 5000;
    $jumlahEksemplar = $jumlahBuku * 10;
    $totalHarga = 0;

    if ($jumlahEksemplar <= 100) {
        $totalHarga = $jumlahEksemplar * $hargaPerEksemplar;
    } elseif ($jumlahEksemplar <= 200) {
        $totalHarga = 100 * $hargaPerEksemplar * 0.95; 
        $sisaEksemplar = $jumlahEksemplar - 100;
        $totalHarga += $sisaEksemplar * $hargaPerEksemplar * 0.85;
    } else {
        $totalHarga = 100 * $hargaPerEksemplar * 0.93; 
        $totalHarga += 100 * $hargaPerEksemplar * 0.83; 
        $sisaEksemplar = $jumlahEksemplar - 200;
        $totalHarga += $sisaEksemplar * $hargaPerEksemplar * 0.73;
    }

    return $totalHarga;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jumlahBuku = $_POST['jumlahBuku'];
    $hargaTotal = hitungHargaTotal($jumlahBuku);

    echo "Jumlah buku yang dibeli: $jumlahBuku<br>";
    echo "Total harga yang harus dibayar: Rp " . number_format($hargaTotal, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Harga Buku</title>
</head>
<body>
    <form method="post" action="">
        <label for="jumlahBuku">Jumlah Buku:</label>
        <input type="number" id="jumlahBuku" name="jumlahBuku">
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
