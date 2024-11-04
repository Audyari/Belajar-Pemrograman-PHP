<?php

$NamaLengkap = "Audyari Wiyono";
$Alamat = "Pondok Gede";
$GolinganDarah = "AB";
$test = "<h1>Hello World</h1>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mix HTML</title>
</head>
<body>
    <h1>Nama Saya : <?php echo $NamaLengkap; ?> </h1>
    <p>Alamat Saya : <?php echo $Alamat; ?> </p>
    <p>Golongan Darah : <?php echo $GolinganDarah; ?> </p>

    <?php
    echo $test;
    ?>
</body>
</html>