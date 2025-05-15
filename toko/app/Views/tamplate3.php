<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TAMPLATE</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #0b0b0b;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #ffffff;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: #151515;
      box-shadow: 0 0 20px #ff00ff44;
    }

    .navbar .brand {
      font-size: 1.5rem;
      color: #ff00ff;
      text-shadow: 0 0 10px #ff00ff;
      font-weight: bold;
      text-decoration: none;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    .navbar ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .navbar ul li a:hover {
      color: #ff00ff;
      text-shadow: 0 0 8px #ff00ff;
    }

    .container {
      padding: 3rem 2rem;
      text-align: center;
    }

    .container h1 {
      font-size: 2.8rem;
      margin-bottom: 2rem;
      color: #ff00ff;
      text-shadow: 0 0 12px #ff00ff;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
    }

    .card {
      background-color: #1e1e1e;
      border-radius: 12px;
      padding: 2rem;
      width: 280px;
      box-shadow: 0 0 15px #ff00ff33;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 25px #ff00ff88;
    }

    .card h3 {
      margin-bottom: 1rem;
      color: #ff00ff;
      text-shadow: 0 0 6px #ff00ff;
    }

    .card p {
      font-size: 0.95rem;
      color: #dddddd;
    }

    @media (max-width: 768px) {
      .cards {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <a href="#" class="brand">Raihan Salman Alfarisi</a>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Layanan</a></li>
      <li><a href="#">Proyek</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>TAMPLATE</h1>
    <div class="cards">
      <div class="card">
        <h3>TUGAS</h3>
        <p>Susah Sekali Pak</p>
      </div>
    </div>
  </div>

</body>
</html>
