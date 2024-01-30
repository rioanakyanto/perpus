<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Peminjaman</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
  <button type="button" class="btn-close" aria-label="Close" ></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            INFO
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.exabytes.co.id">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<center>
    <h2>Aplikasi Perpustakaan Digital</h2>

<div class="alert alert-primary" class="alert">
      Anda Login Sebagai <b>Pengguna</b> Aplikasi Perpustakaan Digital
    </div>

    <div class="card mt-2" class="card">
      <div class="card-body">
        <!-- ini isi web kita -->
        <?php
        $file = @$_GET['url'];
        if (empty($file)) {
          echo "<h4>Selamat Datang Di Halaman Petugas.</h4>";
          echo "Aplikasi Perpustakaan Digital digunakan untuk mempermudah siswa/siswi membaca dan meminjam buku di SMK Management Training Systems.";
        } else {
          include $file . '.php';
        }
        ?>
      </div>
    </div>
    <center>
</body>
</html>