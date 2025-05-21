<?php
// Masukkan file koneksi ke file ini
require 'config/koneksi.php';

// Cek apakah proses dijalankan menggunakan method POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Ambil semua yang ada di input edit.php
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $status = $_POST['status'];

    // Lakukan query update ke table users
    $query = "UPDATE items SET id='$id', name='$nama', description='$description', stock='$stock', status='$status' WHERE id='$id'";

    // Jalankan query update di atas
    if (mysqli_query($con, $query)) {
        // Jika berhasil melakukan update ke database kembali ke index.php
        echo "<meta http-equiv='refresh' content='1;url=dashboard.php'>";
    } else {
        // Jika gagal melakukan update
        echo mysqli_error($con);
        echo "<meta http-equiv='refresh' content='5;url=edit.php?id=$id'>";
    }
}
mysqli_close($con);
?>