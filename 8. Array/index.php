<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$angka = array("sapi", "kambing", "ayam", "kucing", "kuda", "sapi", "ayam", "kambing", "kucing", 10);

echo $angka[0];
echo "<br>";

var_dump($angka);

echo "<br>";
print_r($angka);
echo "<br>";

echo count($angka);

$dataArray = [
    "nama" => "Audyari Wiyono",
    "alamat" => "Pondok Gede",
    "pekerjaan" => "Mahasiswa",
    "hobi" => "Menonton"
];

echo "<br>";

print_r($dataArray);

echo "<br>";
$nilaiArray = [1,2,3,4,5,6,7,8,9,10];
$nilaiArray[] = 11;

print_r($nilaiArray);

echo "<br>";

echo $nilaiArray[12]??"tidak ada";
echo "<br>";


?>
</body>
</html>