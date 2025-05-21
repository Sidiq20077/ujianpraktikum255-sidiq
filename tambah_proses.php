<?php 
require "config/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : '';
    $stock = isset($_POST['stock']) ? htmlspecialchars($_POST['stock']) : '';
    $status = isset($_POST['status']) ? htmlspecialchars($_POST['status']) : '';

    if ($nama && $description && $stock && $status) {
        $query = "INSERT INTO items (name, description, stock, status) VALUES ('$nama','$description','$stock','$status')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<div class='alert alert-success'>Data berhasil disimpan. Mengalihkan...</div>";
            echo "<meta http-equiv='refresh' content='1;url=dashboard.php'>";
        } else {
            echo "<div class='alert alert-danger'>Gagal menyimpan data: " . mysqli_error($con) . "</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Judul dan konten wajib diisi.</div>";
    }

    mysqli_close($con);
}
?>
