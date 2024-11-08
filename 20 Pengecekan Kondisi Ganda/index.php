<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengecekan Kondisi Ganda</title>
</head>
<body>
    
<?php
// Deklarasi variabel
$ukuran = 'XL';
$warna = 'merah';
$biaya = 70000;

// Pengecekan kondisi ganda untuk biaya tambahan
if ($ukuran == 'XL' && $warna == 'merah') {
    // Jika kondisi terpenuhi, tambahkan biaya tambahan
    $biaya_tambahan = 5000;
    $total_biaya = $biaya + $biaya_tambahan;
    echo "Biaya yang dikenakan adalah " . $total_biaya;
    echo "<br>";
} else {
    // Jika kondisi tidak terpenuhi, tampilkan biaya awal
    echo "Biaya yang dikenakan adalah " . $biaya;
    echo "<br>";
}

// Deklarasi variabel baru
$tujuan = 'Surabaya';
$harga = 100000;
$diskon = 10000;

// Pengecekan kondisi ganda untuk harga tiket
if ($tujuan == 'Surabaya' || $tujuan == 'Malang') {
    // Jika kondisi terpenuhi, kurangi harga dengan diskon
    $harga = $harga - $diskon;
    echo "Harga tiket adalah " . $harga;
    echo "<br>";
} else {
    // Jika kondisi tidak terpenuhi, tampilkan harga awal
    echo "Harga tiket adalah " . $harga;
    echo "<br>";
}

// CODE 2

$condition1 = true;
$condition2 = false;

// Menggunakan operator &&
if ($condition1 && $condition2) {
    echo "Kedua kondisi adalah benar";
    echo "<br>";
} else {
    echo "Setidaknya satu kondisi adalah salah";
    echo "<br>";
}

// Output: Setidaknya satu kondisi adalah salah

// Menggunakan operator ||
if ($condition1 || $condition2) {
    echo "Setidaknya satu kondisi adalah benar";
    echo "<br>";
} else {
    echo "Kedua kondisi adalah salah";
    echo "<br>";
}

// Output: Setidaknya satu kondisi adalah benar

?>

</body>
</html>