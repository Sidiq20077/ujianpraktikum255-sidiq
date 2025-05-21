<?php
require 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];

    // Gunakan prepared statement untuk keamanan
    $stmt = mysqli_prepare($con, "DELETE FROM items WHERE id = ?");
    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (mysqli_stmt_execute($stmt)) {
        // Jika berhasil, kembali ke index.php
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika gagal
        echo "Gagal menghapus data: " . mysqli_error($con);
        echo "<br><a href='dashboard.php'>Kembali</a>";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>
