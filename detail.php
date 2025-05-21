<?php
require 'config/koneksi.php';

// Ambil semua item dari database
$query = "SELECT * FROM items ORDER BY id ASC";
$result = mysqli_query($con, $query);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Items</title>
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
<nav class="navbar navbar-dark bg-light">
  <div class="container-fluid">
    <div class="d-flex align-items-center gap-3">
      <a class="navbar-brand text-dark" href="dashboard.php">Dashboard</a>
      <a class="navbar-brand text-dark" href="logout.php">Logout</a>
    </div>
  </div>
</nav>

  <div class="container my-5">
    <div class="glass-container">
        <h1>Semua Data Item</h1>

  <?php if (mysqli_num_rows($result) > 0): ?>
    <table class="table table-bordered mt-4">
      <table class="table table-bordered table-hover shadow-sm">
        <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Deskripsi</th>
          <th>Stock</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; while ($item = mysqli_fetch_assoc($result)): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($item['name']) ?></td>
            <td><?= htmlspecialchars($item['description']) ?></td>
            <td><?= htmlspecialchars($item['stock']) ?></td>
            <td><?= htmlspecialchars($item['status']) ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
      </table>
    </table>
  <?php else: ?>
    <div class="alert alert-warning mt-4">Belum ada data item.</div>
  <?php endif; ?>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
