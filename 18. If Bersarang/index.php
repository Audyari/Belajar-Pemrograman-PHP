<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Bersarang</title>
</head>
<body>
<?php
// Deklarasi variabel untuk nilai psikotes, wawancara, dan kesehatan
$psikotes = 85;
$wawancara = 'lulus';
$kesehatan = 'tidak';

// Periksa apakah nilai psikotes >= 80
if ($psikotes >= 80) {
    // Jika lulus psikotes, tampilkan pesan
    echo "Selamat Anda Lulus Psikotes" . "<br>";

    // Periksa apakah wawancara lulus
    if ($wawancara == 'lulus') {
        // Jika lulus wawancara, tampilkan pesan
        echo "Selamat Anda Lulus Wawancara" . "<br>";

        // Periksa apakah kesehatan lulus
        if ($kesehatan == 'lulus') {
            // Jika lulus kesehatan, tampilkan pesan
            echo "Selamat Anda Layak menjadi karyawan Kami";
        } else {
            // Jika tidak lulus kesehatan, tampilkan pesan
            echo "Mohon Maaf Anda tidak Lulus Tes Kesehatan";
        }
    } else {
        // Jika tidak lulus wawancara, tampilkan pesan
        echo "Mohon Maaf Anda tidak Lulus Wawancara";
    }
} else {
    // Jika tidak lulus psikotes, tampilkan pesan
    echo "Mohon Maaf Anda tidak Lulus Psikotes";
}

?>
</body>
</html>