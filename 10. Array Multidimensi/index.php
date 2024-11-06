<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi</title>
</head>
<body>

<?php

$angka = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

echo "Menampilkan elemen array menggunakan indeks:<br>";
echo "angka[0][2] = " . $angka[0][2] . "<br>";
echo "angka[2][1] = " . $angka[2][1] . "<br><br>";

echo "Menampilkan array menggunakan var_dump:<br>";
echo "<pre>";
var_dump($angka);
echo "</pre><br>";

echo "Menampilkan array menggunakan print_r:<br>";
echo "<pre>";
print_r($angka);
echo "</pre><br>";

echo "Menampilkan array menggunakan perulangan:<br>";
echo "<table border='1'>";
foreach ($angka as $baris) {
    echo "<tr>";
    foreach ($baris as $kolom) {
        echo "<td>" . $kolom . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

$mahasiswa = array
  (
  array("Marimar",20,"Wanita"),
  array("Soledad",25,"Wanita"),
  array("Alfonso",30,"Pria")
  );

  
echo "Menampilkan mahasiswa menggunakan print_r:<br>";
echo "<pre>";
print_r($mahasiswa);
echo "</pre><br>";

$karnivora	=['singa','macan','serigala'];
$herbivora	=['kuda','sapi','kambing'];
$omnivora	=['ayam','monyet','babi'];
$binatang	=['karnivora'=>$karnivora,'herbivora'=>$herbivora,'omnivora'=>$omnivora];


echo "Menampilkan binatang menggunakan print_r:<br>";
echo "<pre>";
print_r($binatang);
echo "</pre><br>";


?>