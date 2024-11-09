<?php

/**
 * Fungsi untuk mengalikan dua buah angka
 *
 * @param int|float $x Angka pertama
 * @param int|float $y Angka kedua
 * @return int|float Hasil perkalian $x dan $y
 */
function perkalian($x, $y)
{
    // Hitung hasil perkalian $x dan $y
    $z = $x * $y;

    // Kembalikan hasilnya
    return $z;
}

// Tampilkan hasil perkalian 2 dan 3
echo "2 * 3 = " . perkalian(2, 3) . "<br>";

// Code Kedua

$alas = 10;
$tinggi = 5;

/**
 * Fungsi untuk menghitung luas segitiga
 *
 * @param int|float $alas Alas segitiga
 * @param int|float $tinggi Tinggi segitiga
 * @return int|float Luas segitiga
 */
function luas_segitiga($alas, $tinggi)
{
    // Hitung luas segitiga
    $luas = $alas * $tinggi / 2;

    // Kembalikan hasilnya
    return $luas;
}

// Tampilkan luas segitiga
echo "Luas segitiga adalah " . luas_segitiga($alas, $tinggi) . "<br>";

//code ke tiga


$alas = 10;
$tinggi = 5;

/**
 * Fungsi untuk menghitung luas segitiga
 *
 * @param int|float $alas Alas segitiga
 * @param int|float $tinggi Tinggi segitiga
 * @return int|float Luas segitiga
 */
function luas_segitiga1($alas, $tinggi)
{
    // Hitung luas segitiga
    $luas = $alas * $tinggi / 2;
    // Kembalikan hasilnya
    return $luas;
}
// Tampilkan luas segitiga
echo "Luas segitiga adalah " . luas_segitiga1($alas, $tinggi) . "<br>";

?>