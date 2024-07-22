 <!-- barra de navegación -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('inicio')?>">
      <img src= "assets\img\logo_ddp.png" alt="Logo" width="50" height="50" class="img-fluid"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Acceder</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-danger" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
