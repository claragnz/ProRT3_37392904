<?php
   $session = session();
   $nombre= $session->get('nombre');
   $perfil= $session->get('perfil_id');
   ?>

<!-- barra de navegación -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('inicio')?>">
      <img src= "assets\img\logo_ddp.png" alt="Logo" width="50" height="50" class="img-fluid"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <?php if(session()->perfil_id == 1):?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a href="">ADMIN:  <?php echo session('nombre'); ?> </a>
            </div>

        <a class="navbar_brand" href="#"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href='quienes_somos'>Quiénes somos</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-danger" type="submit">Buscar</button>
      </form>
        </div>

           <?php elseif(session()->perfil_id == 2):?>
             <div class="btn btn-secondary active btnUser btn-sm">
                <a href="">CLIENTE:  <?php echo session('nombre'); ?> </a>
            </div>

        <a class="navbar_brand" href="#"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href='registro'>Registro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-danger" type="submit">Buscar</button>
      </form>
        </div>

    <?php else:?>
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
    <?php endif;?>
    </div>
  </div>
</nav>
