<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query String GET</title>
</head>
<body>
    
<form action="index.php" method="get"> 
    Nama: <input type="text" name="nama">
    Alamat: <input type="text" name="alamat"><br><br>
<input type="submit" value="submit">
</form>

  
<?php
// Validasi input
if (isset($_GET['nama']) && isset($_GET['alamat'])) {
   
    $nama = htmlspecialchars($_GET['nama']);
    $alamat = htmlspecialchars($_GET['alamat']);

    // Tampilkan nilai yang telah divalidasi
    echo "Nama Kamu : " . $nama;
    echo "<br>";
    echo "Alamat Kamu : " . $alamat;
    
} else {
    // Tampilkan pesan error jika input tidak valid
    echo "Input tidak valid";
}

?>


</body>
</html>