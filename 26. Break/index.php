<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break</title>
</head>

<body>
    <?php
    /**
     * Mencari warna hitam dalam array
     * @var array $arr_warna Contoh array yang berisi warna
     */
    $arr_warna    = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'hitam'];
    echo "Saya mencari warna hitam<br>";
    foreach ($arr_warna as $key => $value) {
        // Menampilkan nilai yang sedang di loop
        echo "Warna pada elemen array ke-$key adalah $value <br>";
        // Cek jika warna pada indeks $i adalah hitam
        if ($value == 'hitam') {
            // Jika true, maka break
            echo "<b>Nah Warna Hitam sudah ditemukan! Dia berada pada indeks ke-$key</b><br>";
            break;
        }
    }
    ?>
</body>

</html>