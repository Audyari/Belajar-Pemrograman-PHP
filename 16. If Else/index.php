<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else</title>
</head>
<body>
    
<?php
// Deklarasi variabel nama
$nama = "Audyari ";

// Periksa apakah nama sama dengan "Audyari Wiyono"
if ($nama == "Audyari Wiyono") {
    // Jika sama, tampilkan pesan selamat datang
    echo "Selamat Datang " . $nama;
} else {
    // Jika tidak sama, tampilkan pesan bukan Audyari
    echo "Anda Bukan Audyari, nama Anda adalah " . $nama;
}

// Deklarasi variabel nilai
$nilai = 80;

// Periksa apakah nilai lebih besar atau sama dengan 80
if ($nilai >= 80) {
    // Jika lebih besar atau sama, tampilkan pesan lulus
    echo "<br>Anda Lulus dengan nilai " . $nilai;
} else {
    // Jika tidak, tampilkan pesan tidak lulus
    echo "<br>Anda Tidak Lulus dengan nilai " . $nilai;
}

// Deklarasi variabel usia
$usia = 20;

// Periksa apakah usia lebih besar atau sama dengan 18
if ($usia >= 18) {
    // Jika lebih besar atau sama, tampilkan status dewasa
    echo "<br>Usia Anda: " . $usia;
    echo "<br>Status: Dewasa";
} else {
    // Jika tidak, tampilkan status belum dewasa
    echo "<br>Usia Anda: " . $usia;
    echo "<br>Status: Belum Dewasa";
}

?>

</body>
</html>