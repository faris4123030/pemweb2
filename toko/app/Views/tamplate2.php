<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APAAN TUH</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #0d0d0d;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #ffffff;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: #1a1a1a;
      box-shadow: 0 0 20px #00ffff44;
    }

    .navbar .brand {
      font-size: 1.5rem;
      color: #00ffff;
      text-shadow: 0 0 10px #00ffff;
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
      color: #00ffff;
      text-shadow: 0 0 8px #00ffff;
    }

    .container {
      padding: 3rem 2rem;
      text-align: center;
    }

    .container h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: #00ffff;
      text-shadow: 0 0 10px #00ffff;
    }

    .container p {
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto;
      line-height: 1.6;
      color: #cccccc;
    }

    @media (max-width: 768px) {
      .navbar ul {
        flex-direction: column;
        gap: 1rem;
        margin-top: 1rem;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <a href="#" class="brand">APAAN TUH</a>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Tentang</a></li>
      <li><a href="#">Layanan</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>TAMPLATE 2</h1>
    <p>
        SUSAH SEKALI PAK.
    </p>
  </div>

</body>
</html>
