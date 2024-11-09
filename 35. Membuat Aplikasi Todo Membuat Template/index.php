<?php

/**
 * Inisialisasi array untuk menyimpan todo list
 *
 * @var array $todos
 */
$todos = [];

// Membaca file todo.txt dan mengkonversi JSON menjadi array
if (file_exists('todo.txt')) {
    // Membaca file todo.txt
    $file = file_get_contents('todo.txt');

    // Mengkonversi string JSON menjadi array
    if ($file !== false) {
        /**
         * Mengkonversi string JSON menjadi array
         *
         * @param string $file String JSON yang akan dikonversi
         * @return array Array yang dihasilkan dari konversi
         */
        $todos = json_decode($file, true);
    }
}



// Memeriksa apakah ada data todo yang dikirim melalui metode POST
if (isset($_POST['todo'])) {
    // Mengambil data yang diinput pada form
    $data = $_POST['todo'];

    // Menambahkan data todo baru ke dalam array dengan status awal 0 (belum selesai)
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];

    // Menyimpan daftar belanja dalam format serialized
    $daftar_belanja = json_encode($todos);

    // Menulis data serialized ke dalam file todo.txt
    file_put_contents('todo.txt', $daftar_belanja);

    // Redirect ke halaman index.php
    // Setelah selesai menambahkan data Todo baru, maka
    // browser akan diarahkan kembali ke halaman index.php
    // untuk menampilkan daftar Todo yang sudah diupdate
    header('Location: index.php');
    exit;
}

//jika ditemukan $_GET['status']
if (isset($_GET['status'])) {
    //ubah status
    $todos[$_GET['key']]['status'] = $_GET['status'];
    $daftar_belanja = json_encode($todos);
    file_put_contents('todo.txt', $daftar_belanja);
    //redirect halaman
    header('location:index.php');
}
print_r($todos);
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





        <ul class="list-group mt-3">
            <!-- 
            Looping data array $todos yang berisi item Todo
            dan menampilkan setiap item Todo
          -->
            <?php foreach ($todos as $key => $value): ?>
                <li class="list-group-item">

                    <!-- 
                    Membuat input checkbox untuk mengubah status Todo
                    Ketika input checkbox di klik, maka akan mengarahkan ke halaman index.php
                    dengan parameter status yang berbeda dan key yang sesuai dengan item Todo yang di klik
                    -->

                    <input type="checkbox" name="todo" onclick="window.location.href='index.php?status=<?php echo $value['status'] == 1 ? '0' : '1'; ?> &key=<?php echo $key; ?>'" <?php if ($value['status'] == 1) echo 'checked' ?>>


                    <label>
                        <?php
                        if ($value['status'] == 1) {
                            echo '<del>' . $value['todo'] . '</del>';
                        } else {
                            echo $value['todo'];
                        }
                        ?></label>
                    <!-- 
                    Membuat link untuk menghapus item Todo
                  -->
                    <a href="#" class="float-right">hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>

    <!-- 
    Menggunakan jQuery dan Bootstrap JavaScript untuk fungsionalitas
  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>