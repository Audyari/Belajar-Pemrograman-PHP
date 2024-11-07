<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Deklarasi variabel nilai
    $nilai = 70;

    // Periksa nilai dan tampilkan hasil
    if ($nilai >= 85) { // Jika nilai >= 85, maka tampilkan Nilai A
        echo "Selamat Anda mendapat Nilai A";
    } else if ($nilai >= 70) { // Jika nilai >= 70 dan < 85, maka tampilkan Nilai B
        echo "Selamat Anda mendapat Nilai B";
    } else if ($nilai >= 60) { // Jika nilai >= 60 dan < 70, maka tampilkan Nilai C
        echo "Anda mendapat Nilai C";
    } else { // Jika nilai < 60, maka tampilkan Nilai D
        echo "Anda mendapat Nilai D";
    }
    ?>
</body>
</html>