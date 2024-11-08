<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Array</title>
</head>

<body>
    <?php

    // CODE KE SATU

    $arr_warna = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];
    $jumlah = 0;
    if ($arr_warna[0] == 'merah') {
        $jumlah++;
    }
    if ($arr_warna[1] == 'merah') {
        $jumlah++;
    }
    if ($arr_warna[2] == 'merah') {
        $jumlah++;
    }
    if ($arr_warna[3] == 'merah') {
        $jumlah++;
    }
    if ($arr_warna[4] == 'merah') {
        $jumlah++;
    }
    if ($arr_warna[5] == 'merah') {
        $jumlah++;
    }

    echo $jumlah . "<br><br>";

    // CODE KE DUA

    // Deklarasi array warna
    $arr_warna = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];

    // Inisialisasi variabel jumlah
    $jumlah = 0;

    // Perulangan untuk menghitung jumlah warna merah
    for ($i = 0; $i < count($arr_warna); $i++) {
        // Cek jika warna pada indeks $i adalah merah
        if ($arr_warna[$i] == 'merah') {
            // Jika true, increment jumlah
            $jumlah++;
        }
    }

    // Tampilkan jumlah warna merah

    echo "Jumlah warna merah: " . $jumlah . "<br>";

    // Deklarasi array warna kedua
    $arr_warna2 = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];

    // Inisialisasi variabel jumlah kedua
    $jumlah2 = 0;

    // Perulangan untuk menghitung jumlah warna merah kedua
    for ($i = 0; $i < count($arr_warna2); $i++) {
        // Cek jika warna pada indeks $i adalah merah
        if ($arr_warna2[$i] == 'merah') {
            // Jika true, increment jumlah
            $jumlah2++;
        }
    }

    // Tampilkan jumlah warna merah kedua
    echo "Jumlah warna merah kedua: " . $jumlah2;
   
   ?>

    
</body>

</html>