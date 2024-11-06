<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form</title>
</head>
<body>

    <!-- Form 1 -->
    <form action="" method="post">
        <label>Nama:</label>
        <input type="text" name="nama"><br><br>
        <label>Alamat:</label>
        <input type="text" name="alamat"><br><br>
        <input type="submit" value="submit">
    </form>

    <!-- Form 2 -->
    <form action="proses.php" method="get">
        <label>Nama:</label>
        <input type="text" name="nama"><br><br>
        <label>Alamat:</label>
        <input type="text" name="alamat"><br><br>
        <input type="submit" value="submit">
    </form>

    <!-- Form 3 -->
    <form action="" method="post">
        <label>Nama:</label>
        <input type="text" name="nama"><br><br>
        <input type="submit" value="submit">
    </form>

    <!-- Form 4 -->
    <form action="" method="post">
        <label>Alamat:</label>
        <textarea name="alamat" rows="8" cols="200"></textarea><br><br>
        <input type="submit" value="submit">
    </form>

    <!-- Form 5 -->
    <form action="" method="post">
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="submit">
    </form>

    <!-- Form 6 -->
    <form action="" method="post">
        <label>Tanggal Beli:</label>
        <input type="date" name="tanggal"><br><br>
        <input type="submit" value="submit">
    </form>

    <!-- Form 7 -->
    <form action="" method="post">
        <input type="button" value="ini Button" onClick="alert('Hello')" >
    </form>

    <!-- Form 8 -->
    <form action="" method="post">
        <label>Pilih Bahasa:</label><br>
        <input type="checkbox" name="PHP" value="PHP"> PHP<br>
        <input type="checkbox" name="HTML" value="HTML" checked> HTML<br>
        <input type="checkbox" name="javascript" value="javascript" checked> Javascript<br>
    </form>

    <!-- Form 9 -->
    <form action="" method="post">
        <label>Program Studi:</label>
        <select name="program_studi">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
            <option value="MI">Manajemen Informatika</option>
        </select>
    </form>

    <!-- Form 10 -->
    <form action="" method="post">
        <label>Program Studi:</label><br>
        <input type="radio" name="program_studi" value="SI" > Sistem Informasi<br>
        <input type="radio" name="program_studi" value="TI"> Teknik Informatika<br>
        <input type="radio" name="program_studi" value="MI"> Manajemen Informatika
    </form>

    <!-- Form 11 -->
    <form action="" method="post">
        <label>Pilih File:</label>
        <input type="file" name="dokumen">
    </form>

</body>
</html>