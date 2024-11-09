<?php

/**
 * Contoh menulis dan membaca file
 *
 * @author       Rahmat Effendi <rahmat@effendi.id>
 * @copyright    2015 Rahmat Effendi
 * @license      http://www.opensource.org/licenses/mit-license.php  MIT License
 *
 * Contoh menulis dan membaca file menggunakan fungsi file_put_contents() dan file_get_contents()
 */
$pesan = "Ini hasil membuat file melalui PHP\n";
// Membuat file dengan nama "file.txt" dan isi $pesan
file_put_contents("file.txt", $pesan, FILE_APPEND);
// Membaca isi file "file.txt" dan disimpan ke dalam variabel $isi_file
$isi_file = file_get_contents("file.txt");
// Menampilkan isi file "file.txt"
echo $isi_file;
