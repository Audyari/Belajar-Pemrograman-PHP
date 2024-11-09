<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Menampilkan Data ke Table</title>
</head>

<body>

    <?php

    // Array assosiatif karyawan yang berisi data karyawan
    $karyawan = [
        ['nama' => 'Naufal', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Pria'],
        ['nama' => 'Winda', 'alamat' => 'Surabaya', 'jenis_kelamin' => 'Wanita'],
        ['nama' => 'Abyasa', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Pria']
    ];

    /**
     * Menampilkan isi dari sebuah array dengan format yang rapi.
     * 
     * @param array<int, array<string, string>> $array Array yang akan ditampilkan.
     * 
     * @return void
     */
    function printArray(array $array): void
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    // Memanggil fungsi printArray untuk menampilkan data karyawan
    printArray($karyawan);

    ?>

    <div class="container">
        <h1 class="text-center mt-5">Daftar Karyawan</h1>
        <table class="table table-striped table-bordered table-hover mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inisialisasi nomor urut
                $no = 1;
                // Menampilkan data karyawan dalam bentuk tabel
                foreach ($karyawan as $value) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($value['nama']); ?></td>
                        <td><?= htmlspecialchars($value['alamat']); ?></td>
                        <td><?= htmlspecialchars($value['jenis_kelamin']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h1 class="text-center mt-5">Daftar Siswa</h1>
        <table class="table table-striped table-bordered table-hover mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Golongan Darah</th>
                </tr>
            </thead>
            <tbody>
                <?php

                // Array berisi data siswa
                $siswa = [
                    ['nama' => 'toni', 'kelas' => '2A', 'goldarah' => 'B'],
                    ['nama' => 'kresna', 'kelas' => '2A', 'goldarah' => 'AB'],
                    ['nama' => 'palupi', 'kelas' => '2B', 'goldarah' => 'B'],
                    ['nama' => 'singgih', 'kelas' => '2C', 'goldarah' => 'A'],
                    ['nama' => 'oriza', 'kelas' => '2B', 'goldarah' => 'O'],
                    ['nama' => 'hani', 'kelas' => '2D', 'goldarah' => 'B'],
                ];

                /**
                 * Fungsi untuk mencetak data siswa dalam bentuk array.
                 * 
                 * Fungsi ini akan mencetak data siswa dalam bentuk array yang
                 * di format dengan menggunakan fungsi print_r() dan digunakan
                 * untuk debuging.
                 * 
                 * @param array<int, array{nama: string, kelas: string, goldarah: string}> $siswa
                 *      Array berisi data siswa yang akan di cetak.
                 * 
                 * @return void
                 */
                function printSiswa(array $siswa): void
                {
                    echo "<pre>";
                    var_dump($siswa);
                    echo "</pre>";
                }

                printSiswa($siswa);

                // Inisialisasi nomor urut
                $no = 1;
                // Menampilkan data siswa dalam bentuk tabel
                foreach ($siswa as $value) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($value['nama']); ?></td>
                        <td><?= htmlspecialchars($value['kelas']); ?></td>
                        <td><?= htmlspecialchars($value['goldarah']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>