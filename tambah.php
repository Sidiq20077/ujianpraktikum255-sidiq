<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

    body {
      background: linear-gradient(135deg, #667eea, #764ba2);
      background-size: cover;
      background-position: center;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
      animation: fadeInUp 1s ease-out;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 20px;
      max-width: 400px;
      width: 100%;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      animation: fadeInUp 1.2s ease-out;
    }
    </style>
  </head>
  <body>
  
<nav class="navbar navbar-dark bg-light">
  <div class="container-fluid">
      <div class="d-flex align-items-center">
        <a class="navbar-brand text-dark" href="dashboard.php">dashboard</a>
        <a class="text-dark" href="logout.php">Logout</a>
      </div>
  </div>
    
</nav>

<div class="container my-5">
     <h1>Add item</h1>

   <form action="tambah_proses.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="integer" name="stock" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select" required>
              <option value="" disabled selected>Pilih status</option>
              <option value="new">New</option>
              <option value="used">Used</option>
              <option value="refurbished">Refurbished</option>
            </select>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn">Simpan</button>
        </div>
        
    </form>
</div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>