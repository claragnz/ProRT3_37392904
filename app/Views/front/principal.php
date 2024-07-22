<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/css/styles.css" rel="stylesheet" >
  </head>
  <body>
    <header>
        <h1>Defensores del pastizal</h1>
    </header>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
 
  <!-- barra de navegación -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('principal')?>">
      <img src= "assets\img\logo_ddp.png" alt="Logo" width="50" height="50" class="img-fluid"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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
            Acceder
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Acceder</a></li>
            <li><a class="dropdown-item" href="#">Registro</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Contactanos</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-danger" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<!-- quote -->
<div class="card border-dark mb-3" style="max-width: 100%;">
  <div class="card-header">
    Revalorizando nuestros ecosistemas nativos
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Para el que mira sin ver, la tierra es tierra nomás.</p>
      <footer class="blockquote-footer"><cite title="Source Title">Atahualpa Yupanqui</cite></footer>
    </blockquote>
  </div>
</div>

  <!---carrusel--->
  <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/pastizal.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/bosque.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/monocultivos.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--formulario login-->
<form>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>

<!--formulario registro-->
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputName" class="form-label">Nombre</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputLastname" class="form-label">Apellido</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputPassword3" class="form-label">Contraseña</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Debe tener de 8 a 10 caracteres">
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">Repetir contraseña</label>
    <input type="text" class="form-control" id="inputPassword4" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Provincia</label>
    <select id="inputState" class="form-select">
      <option selected>Seleccionar</option>
      <option>Corrientes</option>
      <option>Chaco</option>
      <option>Formosa</option>
      <option>Entre Ríos</option>
      <option>Santa Fé</option>
    </select>
  </div>
    <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrarme</button>
  </div>
</form>

<!---footer--->
<footer class="footer">
  <div class="footer-content">
    <div class="social-icons">
      <ul>
        <li><a href="https://www.facebook.com/defensoresdelpastizal/" class="social-icon"> <img src="assets/img/facebook_logo64.png" alt= "Facebook"></a></li>
        <li><a href="https://www.instagram.com/defensoresdelpastizal/" class="social-icon"> <img src="assets/img/instagram_icon64.png" alt="Instagram"></a></li>
        <li><a href="https://x.com/def_pastizales" class="social-icon"> <img src="assets/img/twitter_logo64.png" alt="Twitter"></a></li>
      </ul>
    </div>
    <p> Derechos de autor © Defensores del Pastizal 2024 | Made with ♥ by María Clara González </p>
  </div>
</footer>
<script src="assets/js/bootstrap.bundle.min.js"></script>


  </body>
</html>