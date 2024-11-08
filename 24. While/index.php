<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>

    <?php
    // Membuat perulangan dengan While untuk menampilkan nomor antrian
    $x = 1; // Inisialisasi variabel $x dengan nilai 1
    while ($x <= 15) { // Perulangan While dengan kondisi $x <= 15
        echo "Nomor Antrian yang tersedia: $x <br>"; // Menampilkan nomor antrian
        $x++; // Increment nilai $x
    }

    // Menghitung jumlah elemen array dengan While
    $arr_warna = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru']; // Deklarasi array $arr_warna
    $jumlah = 0; // Inisialisasi variabel $jumlah dengan nilai 0
    $i = 0; // Inisialisasi variabel $i dengan nilai 0
    while ($i <= 11) { // Perulangan While dengan kondisi $i <= 11
        if ($arr_warna[$i] == 'merah') { // Cek jika elemen array $arr_warna[$i] sama dengan 'merah'
            $jumlah++; // Increment nilai $jumlah jika kondisi terpenuhi
        }
        $i++; // Increment nilai $i
    }
    echo "Jumlah warna merah " . $jumlah . "<br><br>"; // Menampilkan jumlah warna merah

    // Membuat perulangan dengan do..while untuk menampilkan nomor antrian
    $x = 1; // Inisialisasi variabel $x dengan nilai 1
    do { // Perulangan do..while
        echo "Nomor Antrian yang tersedia: $x <br>"; // Menampilkan nomor antrian
        $x++; // Increment nilai $x
    } while ($x <= 15); // Kondisi perulangan do..while

    ?>

</body>

</html>