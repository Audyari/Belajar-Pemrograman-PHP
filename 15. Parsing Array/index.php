<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label>Nama:</label>
    <input type="text" name="nama"><br><br>
    <label>Alamat:</label>
    <textarea name="alamat" rows="8" cols="200"></textarea><br><br>
    <label>Program Studi:</label>
    <select name="program_studi">
        <option value="SI">Sistem Informasi</option>
        <option value="TI">Teknik Informatika</option>
        <option value="MI">Manajemen Informatika</option>
    </select><br><br>
    <input type="submit" name="proses" value="submit">
</form>

<?php
if (!empty($_POST['proses'])) {
    try {
        $nama = htmlspecialchars($_POST['nama']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $program_studi = htmlspecialchars($_POST['program_studi']);

        // Validasi input
        if (empty($nama) || empty($alamat) || empty($program_studi)) {
            throw new Exception('Inputan tidak lengkap');
        }

        echo "<table border='1'>";
        echo "<tr><th>Nama</th><th>Alamat</th><th>Program Studi</th></tr>";
        echo "<tr>";
        echo "<td>" . $nama . "</td>";
        echo "<td>" . $alamat . "</td>";
        echo "<td>" . $program_studi . "</td>";
        echo "</tr>";
        echo "</table><br>";

        echo "<pre>";
        print_r($_POST);
        echo "</pre><br>";

    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>

</body>
</html>