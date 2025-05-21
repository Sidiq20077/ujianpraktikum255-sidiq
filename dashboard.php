<?php
require "config/koneksi.php";

// Ambil semua data items dari database
$query = "SELECT * FROM items ORDER BY description ASC";
$result = mysqli_query($con, $query);

// Salin data untuk navbar dan tabel
$items = [];
while ($row = mysqli_fetch_assoc($result)) {
    $items[] = $row;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Items</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
  body {
      background: linear-gradient(135deg, #667eea, #764ba2);
      background-size: cover;
      background-position: center;
      align-items: center;
      justify-content: center;
      animation: fadeInUp 1s ease-out;
  }

  .glass-container {
    background-color: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(10px);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,0,0,0.2);

  }

  .table-hover tbody tr:hover {
    background-color: #e9ecef;
    transition: background-color 0.3s ease;
  }

  .btn {
    transition: transform 0.2s ease, background-color 0.3s ease;
  }

  .btn:hover {
    transform: scale(1.05);
  }

</style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-light shadow-sm">
  <div class="container-fluid">
    <div class="d-flex align-items-center gap-3">
      <a class="navbar-brand text-dark" href="detail.php">Inventory</a>
      <a class="navbar-brand text-dark" href="logout.php">Logout</a>
    </div>
  </div>
</nav>

<!-- Main content -->
<div class="container my-5">
  <div class="glass-container">
    <h1 class="mb-4 fw-bold">Dashboard Item</h1>
    <a href="tambah.php" class="btn btn-secondary mb-3 text-white">+ Tambah Data</a>

    <div class="table-responsive">
      <table class="table table-bordered table-hover shadow-sm">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($items)) : ?>
            <?php $no = 1; ?>
            <?php foreach ($items as $show) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($show['name']) ?></td>
                <td><?= htmlspecialchars($show['description']) ?></td>
                <td><?= htmlspecialchars($show['stock']) ?></td>
                <td><?= htmlspecialchars($show['status']) ?></td>
                <td>
                  <a href="edit.php?id=<?= $show['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                  <form action="hapus_proses.php" method="POST" style="display:inline-block;">
                    <input type="hidden" name="id" value="<?= $show['id'] ?>">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else : ?>
            <tr>
              <td colspan="6" class="text-center text-danger">Data tidak ada</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
