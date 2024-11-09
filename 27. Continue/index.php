<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue</title>
</head>

<body>
    <?php
    /**
     * Array berisi nama-nama warna
     * 
     * @var array $arr_warna
     */
    $arr_warna = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];

    /**
     * Melakukan iterasi pada setiap elemen array $arr_warna
     */
    foreach ($arr_warna as $key => $value) {
        /**
         * Jika nilai elemen adalah 'hitam', lanjutkan ke iterasi berikutnya
         */
        if ($value == 'hitam') {
            continue;
        }
        /**
         * Menampilkan nilai elemen beserta indeksnya
         */
        echo "Warna pada elemen array ke-$key adalah $value <br>";
    }

    /**
     * Array berisi informasi siswa-siswi
     * 
     * @var array<int, array{nama: string, kelas: string}> $siswa
     * 
     * Contoh:
     * [
     *     ['nama' => 'toni', 'kelas' => '2A'],
     *     ['nama' => 'kresna', 'kelas' => '2A'],
     *     ['nama' => 'palupi', 'kelas' => '2B'],
     *     ['nama' => 'singgih', 'kelas' => '2C'],
     *     ['nama' => 'oriza', 'kelas' => '2B'],
     *     ['nama' => 'hani', 'kelas' => '2D'],
     * ]
     */
    $siswa = [
        ['nama' => 'toni', 'kelas' => '2A'],
        ['nama' => 'kresna', 'kelas' => '2A'],
        ['nama' => 'palupi', 'kelas' => '2B'],
        ['nama' => 'singgih', 'kelas' => '2C'],
        ['nama' => 'oriza', 'kelas' => '2B'],
        ['nama' => 'hani', 'kelas' => '2D'],
    ];

    /**
     * Menampilkan nama-nama siswa kelas 2A
     * 
     * @param array<int, array{nama: string, kelas: string}> $siswa
     * @return void
     * 
     * Contoh:
     * tampilkanSiswaKelas2A([
     *     ['nama' => 'toni', 'kelas' => '2A'],
     *     ['nama' => 'kresna', 'kelas' => '2A'],
     *     ['nama' => 'palupi', 'kelas' => '2B'],
     *     ['nama' => 'singgih', 'kelas' => '2C'],
     *     ['nama' => 'oriza', 'kelas' => '2B'],
     *     ['nama' => 'hani', 'kelas' => '2D'],
     * ])
     * 
     * Output:
     * Nama : toni <br>
     * Kelas : 2A <br>
     * <br>
     * Nama : kresna <br>
     * Kelas : 2A <br>
     * <br>
     */
    function tampilkanSiswaKelas2A(array $siswa): void
    {
        /**
         * Melakukan iterasi pada setiap elemen array $siswa
         */
        foreach ($siswa as $key => $value) {
            /**
             * Jika kelas siswa adalah 2A, tampilkan nama dan kelas siswa
             */
            if ($value['kelas'] == '2A') {
                echo "Nama : {$value['nama']} <br>";
                echo "Kelas : {$value['kelas']} <br>";
                echo "<br>";
            }
        }
    }

    echo "<br>";
    echo "Kelas 2A <br>";
    echo "<br>";

    tampilkanSiswaKelas2A($siswa);

    echo "<br>";
    echo " Selain Kelas 2A <br>";
    echo "<br>";

    /**
     * Menampilkan nama-nama siswa kelas selain 2A
     * 
     * @param array<int, array{nama: string, kelas: string}> $siswa
     * @return void
     *   
     */
    function tampilkanSiswaKelasSelain2A(array $siswa): void
    {
        // Melakukan iterasi pada setiap elemen array $siswa
        foreach ($siswa as $key => $value) {
            // Jika kelas siswa adalah 2A, melewatkan iterasi
            if ($value['kelas'] == '2A') {
                continue;
            }
            // Menampilkan nama dan kelas siswa
            echo "Nama : {$value['nama']} <br>";
            echo "Kelas : {$value['kelas']} <br>";
            echo "<br>";
        }
    }
    // Menampilkan nama-nama siswa kelas selain 2A
    tampilkanSiswaKelasSelain2A($siswa);

    ?>
</body>

</html>