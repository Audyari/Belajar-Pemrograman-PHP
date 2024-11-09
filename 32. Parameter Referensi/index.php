<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter Referensi</title>
</head>

<body>

    <?php
    /**
     * Fungsi untuk mengganti nama
     *
     * @param string $nama Nama yang akan diganti
     * @return void
     */
    function gantiNama(&$nama)
    {
        // Ganti nama jadi "Indah"
        $nama = "Indah";
    }
    $nama = "Risa";
    gantiNama($nama);
    echo $nama;
    echo "<br>";

    /**
     * Fungsi untuk mengembalikan deretan nilai yang ditentukan
     *
     * @param int $nilai Nilai awal yang akan dikembalikan
     * @return array<int> Deretan nilai
     */
    function deretanNilai(int $nilai): array
    {
        // buat deretan nilai
        $deretan = [];
        for ($i = $nilai; $i <= 640; $i *= 2) {
            $deretan[] = $i;
        }
        return $deretan;
    }
    $nilai = 5;
    $deretan = deretanNilai($nilai);
    // tampilkan deretan nilai
    echo "Deretan nilai: <br>";
    foreach ($deretan as $nilai) {
        echo "$nilai<br>";
    }

    //code ke dua

    function deretanNilai1(int &$nilai): array
    {
        // buat deretan nilai
        $deretan = [];
        for ($i = $nilai; $i <= 640; $i *= 2) {
            $deretan[] = $i;
        }
        $nilai = end($deretan); // ubah nilai asli
        return $deretan;
    }

    $nilai = 5;
    $deretan = deretanNilai1($nilai);

    foreach ($deretan as $nilai) {
        echo "$nilai<br>";
    }

    ?>

</body>

</html>