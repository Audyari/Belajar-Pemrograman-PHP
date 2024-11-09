<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    <?php

    // kode satu

    // Kode untuk menampilkan array $arr_warna menggunakan foreach
    // yang mana akan menampilkan setiap elemen array dan nilainya
    $arr_warna    = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
    /**
     * Melakukan perulangan terhadap array $arr_warna dan menampilkan setiap
     * nilai yang ada
     */
    foreach ($arr_warna as $value) {
        /**
         * Menampilkan nilai yang sedang di loop
         */
        echo "Warna saat ini adalah $value <br>";
    }

    // kode dua 

    /**
     * Contoh penggunaan foreach untuk menampilkan setiap elemen array $arr_warna
     * beserta nilainya
     *
     * @var array $arr_warna Contoh array yang berisi warna
     */
    $arr_warna    = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
    foreach ($arr_warna as $key => $value) {
        // Menampilkan nilai yang sedang di loop
        echo "Warna pada elemen array ke-{$key} adalah {$value} <br>";
    }

    // kode tiga

    /**
     * Contoh penggunaan foreach untuk menampilkan setiap elemen array $arr_warna
     * beserta nilainya dan menghitung jumlah warna merah yang ada
     *
     * @var array $arr_warna Contoh array yang berisi warna
     */
    $arr_warna    = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
    /**
     * Variabel untuk menampung jumlah warna merah yang ada
     *
     * @var int $jumlah_merah
     */
    $jumlah_merah = 0;

    /**
     * Melakukan perulangan terhadap array $arr_warna
     */
    foreach ($arr_warna as $key => $value) {
        /**
         * Menampilkan nilai yang sedang di loop
         */
        echo "Warna pada elemen array ke-$key adalah $value <br>";
        /**
         * Menghitung jumlah warna merah yang ada
         */
        if ($value == 'merah') {
            $jumlah_merah++;
        }
    }

    /**
     * Menampilkan jumlah warna merah yang ada
     */
    echo "Jumlah warna merahnya adalah $jumlah_merah";

    ?>
</body>

</html>