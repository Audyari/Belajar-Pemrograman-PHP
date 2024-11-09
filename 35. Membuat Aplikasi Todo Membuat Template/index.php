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

    // Menyimpan daftar belanja dalam format JSON
    $daftar_belanja = json_encode($todos);

    // Menulis data JSON ke dalam file todo.txt
    simpanData($daftar_belanja);
}

// Memeriksa apakah ada parameter status yang dikirim melalui metode GET
if (isset($_GET['status'])) {
    // Mengubah status todo berdasarkan key yang diberikan
    $todos[$_GET['key']]['status'] = $_GET['status'];

    // Menyimpan perubahan ke dalam file todo.txt
    $daftar_belanja = json_encode($todos);
    simpanData($daftar_belanja);
}

/**
 * Simpan daftar belanja dalam format JSON ke dalam file todo.txt
 *
 * @param string $daftar_belanja Daftar belanja dalam format JSON
 *
 * @return void
 */
function simpanData($daftar_belanja)
{
    // Simpan daftar belanja dalam format JSON ke dalam file todo.txt
    file_put_contents('todo.txt', $daftar_belanja);

    // Redirect ke halaman index.php setelah selesai menyimpan data
    header('location:index.php');
}

// Menampilkan array todos untuk tujuan debugging
print_r($todos);

// Memeriksa apakah ada parameter hapus yang dikirim melalui metode GET
if (isset($_GET['hapus'])) {
    // Hapus data todo berdasarkan key yang diberikan
    unset($todos[$_GET['key']]);

    // Menyimpan perubahan data ke dalam file todo.txt
    $daftar_belanja = json_encode($todos);
    simpanData($daftar_belanja);
}

?>

<!-- 
  HTML Document for a simple Todo application
  Using Bootstrap for styling
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
    Character encoding and viewport settings for responsiveness
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    Page title
    -->
    <title>Aplikasi Todos</title>

    <!-- 
    Include Bootstrap CSS for styling
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <!-- 
    Container for the Todo application
    -->
    <div class="container mt-5">
        <!-- 
        Title of the Todo application
        -->
        <h1 class="text-center">Todo App</h1>

        <!-- 
        Form to input a new Todo item
        -->
        <form action="" method="post">
            <div class="form-group">
                <!-- 
                Label and input for entering a Todo item
                -->
                <label for="todo">Daftar Belanja Hari ini</label>
                <input type="text" class="form-control" id="todo" name="todo" placeholder="Masukkan todo">
            </div>
            <!-- 
            Button to save the Todo item
            -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <!-- 
        List group to display Todo items
        -->
        <ul class="list-group mt-3">
            <!-- 
            Loop through the $todos array to display each Todo item
            -->
            <?php foreach ($todos as $key => $value): ?>
                <li class="list-group-item">
                    <!-- 
                    Checkbox input to toggle Todo status
                    When clicked, redirects to index.php with toggled status and the corresponding Todo item key
                    -->
                    <input type="checkbox" name="todo" onclick="window.location.href='index.php?status=<?php echo $value['status'] == 1 ? '0' : '1'; ?>&key=<?php echo $key; ?>'" <?php if ($value['status'] == 1) echo 'checked' ?>>

                    <label>
                        <?php
                        // Display Todo with strikethrough if completed
                        if ($value['status'] == 1) {
                            echo '<del>' . $value['todo'] . '</del>';
                        } else {
                            echo $value['todo'];
                        }
                        ?></label>
                    <!-- 
                    Link to delete the Todo item
                    -->
                    <a href="index.php?hapus=1&key=<?php echo $key; ?>" onclick="return confirm('Apakah Anda Yakin akan menghapus data ini?')">hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- 
    Include jQuery and Bootstrap JavaScript for functionality
    -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>