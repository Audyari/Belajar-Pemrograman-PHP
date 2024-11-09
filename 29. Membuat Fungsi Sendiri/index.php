<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Fungsi Sendiri</title>
</head>

<body>

    <!--
        Membuat fungsi yang memiliki parameter
        Parameter yang dimasukkan adalah $nama
    -->
    <?php
    /**
     * Membuat fungsi yang memiliki parameter
     * 
     * Parameter yang dimasukkan adalah $nama
     * Fungsi ini akan menampilkan pesan dengan nama yang sesuai
     * 
     * @param string $nama Nama yang akan ditampilkan
     * @return void
     */
    /**
     * Tulis pesan dengan nama yang sesuai
     * 
     * @param string $nama Nama yang akan ditampilkan
     * @return void
     */
    function tulisPesan(string $nama = null): void
    {
        if ($nama === null) {
            echo "Halo, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
            return;
        } else {
            echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
        }
    }
    tulisPesan("Meilan");
    tulisPesan("Naufal");
    tulisPesan("Naura");
    tulisPesan("Mimi");
    tulisPesan();

    ?>

    <?php


    /**
     * Membuat fungsi yang memiliki parameter
     * 
     * Parameter yang dimasukkan adalah $nama
     * Fungsi ini akan menampilkan pesan dengan nama yang sesuai
     * 
     * @param string $nama Nama yang akan ditampilkan
     * @return void
     */
    echo "Halo Meilan, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
    echo "Halo Naufal, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
    echo "Halo Naura, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
    echo "Halo Mimi, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
    ?>

    <?php

    $kalimat = "Saya suka pizza, terutama pizza yang dagingnya tebal";
    echo str_word_count($kalimat);
    echo "<br>";
    echo str_replace("pizza", "Mie", $kalimat);
    echo "<br>";

    ?>

</body>

</html>