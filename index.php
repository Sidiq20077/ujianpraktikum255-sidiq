<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    body {
      background: linear-gradient(135deg, #667eea, #764ba2);
      background-size: cover;
      background-position: center;
      height: 100vh;
      margin: 0;
      display: flex;
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

    h1 {
      font-weight: bold;
      color: #4a148c;
      animation: fadeInUp 1.4s ease-out;
    }

    p {
      animation: fadeInUp 1.5s ease-out;
    }

    input[type="email"],
    input[type="password"] {
      animation: fadeInUp 1.6s ease-out;
    }

button {
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  border: none;
  padding: 10px;
  font-weight: bold;
  border-radius: 8px;
  transition: background 0.3s ease, transform 0.2s ease;
}

button:hover {
  background: linear-gradient(135deg, #5a67d8, #6b46c1);
  transform: scale(1.03);
}

  </style>
</head>
<body>
  s
  <div class="container text-center">
    <h1 class="mb-3">Login Here!</h1>
    <p class="text-muted mb-4">Welcome, please login to continue.</p>

    <form action="login_proses.php" method="POST">
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="d-grid gap-2">
        <button type="submit" class="btn">Login</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
