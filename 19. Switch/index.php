<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    
<?php
// Deklarasi variabel nilai
$nilai = "A";

// Menggunakan switch untuk mengevaluasi nilai
switch($nilai) {
    // Jika nilai adalah 'A'
    case 'A':
        // Tampilkan pesan bahwa nilai sangat memuaskan
        echo "Nilai Anda sangat memuaskan";
        break;
    // Jika nilai adalah 'B'
    case 'B':
        // Tampilkan pesan bahwa nilai memuaskan
        echo "Nilai Anda memuaskan";
        break;
    // Jika nilai adalah 'C'
    case 'C':
        // Tampilkan pesan bahwa nilai cukup
        echo "Nilai Anda cukup";
        break;
    // Jika nilai adalah 'D'
    case 'D':
        // Tampilkan pesan bahwa nilai kurang
        echo "Nilai Anda kurang";
        break;
    // Jika nilai adalah 'E'
    case 'E':
        // Tampilkan pesan bahwa tidak lulus
        echo "Anda tidak lulus";
        break;
    // Jika nilai tidak sesuai dengan kasus di atas
    default:
        // Tampilkan pesan bahwa nilai tidak terdaftar
        echo "Nilai tidak terdaftar";
        break;
}
?>

</body>
</html>