<?php

$arrayData = ["sapi", "kambing", "ayam", "kucing", "kuda"];

$arrayContoh[2] = "burung";

var_dump($arrayData);

echo "<br>";

var_dump($arrayContoh);

echo "<br>";

$dataDiri["nama"] = "Audyari Wiyono";
$dataDiri["alamat"] = "Pondok Gede";
$dataDiri["pekerjaan"] = "Mahasiswa";


var_dump($dataDiri);

echo "<br>";

echo "Nama Saya : " . $dataDiri["nama"] . "<br>" ;
echo "Alamat Saya : " . $dataDiri["alamat"] . "<br>";
echo "Pekerjaan Saya : " . $dataDiri["pekerjaan"];

echo "<br>";

$dataKaryawan = [
    "nama" => "Audyari Wiyono",
    "alamat" => "Pondok Gede",
    "pekerjaan" => "Mahasiswa",
    "hobi" => "Menonton"
];

var_dump($dataKaryawan);

echo "<br>";

echo "Nama Saya : " . $dataKaryawan["nama"] . "<br>" ;  
echo "Alamat Saya : " . $dataKaryawan["alamat"] . "<br>";
echo "Pekerjaan Saya : " . $dataKaryawan["pekerjaan"];

echo "<br>";

?>