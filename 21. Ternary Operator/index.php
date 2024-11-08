<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Deklarasi variabel nilai untuk menentukan status kelulusan
$nilai = 70;

// Menggunakan operator ternary untuk mengevaluasi nilai dan menampilkan status kelulusan
echo ($nilai >= 80) ? "Anda Lulus<br>" : "Anda tidak Lulus<br>";

// Alternatif menggunakan if-else untuk mengevaluasi nilai dan menampilkan status kelulusan
if ($nilai >= 80) {
    // Jika nilai >= 80, maka tampilkan "Anda Lulus"
    echo "Anda Lulus<br>";
} else {
    // Jika tidak, maka tampilkan "Anda tidak Lulus"
    echo "Anda tidak Lulus<br>";
}
?>

</body>
</html>