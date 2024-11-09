<?php

// Enable strict typing mode
declare(strict_types=1);

// Deklarasi variabel nama
$nama = "Meilan";

/**
 * Tulis pesan dengan nama yang sesuai
 *
 * @param string $nama Nama yang akan ditampilkan
 * @return void
 */
function tulisPesan1(string $nama): void
{
    // Menampilkan pesan beserta nama yang sesuai
    echo "Halo $nama, apa kabarmu hari ini? Semoga kabarmu sehat dan bahagia selalu.<br>";
}

// Memanggil fungsi tulisPesan dengan parameter nama
tulisPesan1($nama);

// Deklarasi variabel nama
$nama = "Meilan";

/**
 * Tulis pesan dengan nama yang sesuai
 *
 * @param string $nama Nama yang akan ditampilkan
 * @return void
 */
function tulisPesan2(string $nama): void
{
    // Menampilkan pesan beserta nama yang sesuai
    echo "Halo $nama, apa kabarmu hari ini? Semoga kabarmu sehat dan bahagia selalu.<br>";
}

// Memanggil fungsi tulisPesan dengan parameter nama
tulisPesan2($nama);

// Deklarasi variabel nama
$studentName = "Meilan";

/**
 * Menampilkan pesan dengan nama yang sesuai
 *
 * @param string $name Nama yang akan ditampilkan
 * @return void
 */
function displayMessage(string $name): void
{
    // Menampilkan pesan beserta nama yang sesuai
    echo "Hello $name, how are you today?<br>";
}

// Memanggil fungsi displayMessage dengan parameter nama
displayMessage($studentName);

/**
 * Tulis pesan dengan nama yang sesuai
 *
 * @param string $nama Nama yang akan ditampilkan
 * @return void
 */
function tulisPesanBaru(string $nama): void
{
    // Deklarasi variabel alamat
    $alamat = "Bandung";
    // Menampilkan pesan beserta nama yang sesuai
    echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
}

// Memanggil fungsi tulisPesanBaru dengan parameter nama
$nama = "Meilan";
tulisPesanBaru($nama);
