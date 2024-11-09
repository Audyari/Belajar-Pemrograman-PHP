<?php
// Inisialisasi array untuk menyimpan todo list
$todos = [];

// Membaca isi file 'todo.txt' dan menyimpannya ke variabel $file
$file = file_get_contents('todo.txt');


// Mengubah string JSON menjadi array
if ($file !== false) {
    $todos = json_decode($file, true);
}


// Memeriksa apakah ada data todo yang dikirim melalui metode POST
if (isset($_POST['todo'])) {
    // Mengambil data yang diinput pada form
    $data = $_POST['todo'];

    echo $data;

    // Menambahkan data todo baru ke dalam array dengan status awal 0 (belum selesai)
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];

    // Menyimpan daftar belanja dalam format serialized
    $daftar_belanja = json_encode($todos);

    // Menulis data serialized ke dalam file todo.txt
    file_put_contents('todo.txt', $daftar_belanja);
}
?>

<!-- 
  Dokumen HTML untuk aplikasi Todo sederhana
  Menggunakan Bootstrap untuk styling
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
    Pengaturan karakter encoding dan viewport untuk responsif
  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    Judul halaman
  -->
    <title>Aplikasi Todos</title>

    <!-- 
    Menggunakan Bootstrap CSS untuk styling
  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <!-- 
    Container untuk aplikasi Todo
  -->
    <div class="container mt-5">
        <!-- 
      Judul aplikasi Todo
    -->
        <h1 class="text-center">Todo App</h1>

        <!-- 
      Formulir untuk memasukkan item Todo baru
    -->
        <form action="" method="post">
            <div class="form-group">
                <!-- 
          Label dan input untuk memasukkan item Todo
        -->
                <label for="todo">Daftar Belanja Hari ini</label>
                <input type="text" class="form-control" id="todo" name="todo" placeholder="Masukkan todo">
            </div>
            <!-- 
        Tombol untuk menyimpan item Todo
      -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <!-- 
      Daftar item Todo yang ada
    -->
        <ul class="list-group mt-3">
            <!-- 
        Item Todo dengan checkbox dan link hapus
      -->
            <li class="list-group-item">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="todo">
                    <label class="form-check-label">Todo 1</label>
                </div>
                <a href="#" class="float-right">hapus</a>
            </li>
            <!-- 
        Item Todo lainnya...
      -->
            <li class="list-group-item">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="todo">
                    <label class="form-check-label">Todo 1</label>
                </div>
                <a href="#" class="float-right">hapus</a>
            </li>
            <li class="list-group-item">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="todo">
                    <label class="form-check-label">Todo 1</label>
                </div>
                <a href="#" class="float-right">hapus</a>
            </li>
        </ul>
    </div>

    <!-- 
    Menggunakan jQuery dan Bootstrap JavaScript untuk fungsionalitas
  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>