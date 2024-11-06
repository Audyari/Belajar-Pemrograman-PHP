<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variable POST</title>
</head>
<body>
    
<form action="index.php" method="post">
Nama: <input type="text" name="nama">
Alamat: <input type="text" name="alamat"><br><br>
<input type="submit" value="submit">
</form>

<?php

if (isset($_POST["nama"]) && isset($_POST["alamat"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);

    if (!empty($nama) && !empty($alamat)) {
        echo "Selamat Datang " . $nama . "<br>";
        echo "Anda tinggal di " . $alamat . "<br>";
    } else {
        echo "Nama atau alamat belum diisi<br>";
    }
} else {
    echo "Nama atau alamat belum diisi<br>";
}

?>

</body>
</html>