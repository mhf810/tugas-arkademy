<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?> </title>
    <link rel="stylesheet" href=" <?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="<?= BASEURL; ?>">My Web</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="navbar-brand" href="#">
    <img src="img/arkademy.png" width="100" height="100" class="d-inline-block align-top" alt="">
    Arkademy Bootcamp
  </a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
      
    </div>
  </div>
  </div>
</nav>