<div class="container mt-5 mb-5 d-flex justify-content-center">
<div class="card" style="width: 60%;">
<div class="card-header text-center">
<h2>Iniciar sesión</h2>
<div>
<!-- mensaje de error -->
  <?php if (session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg')?>
        </div>
  <?php endif;?>

<!--formulario login-->
<div class="container mt-5">
<form method="post" action="<?php echo base_url('/enviarlogin') ?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="pass">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
  <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>"> Registrarse aquí</a></span>
</form>
</div>
</div>
</div>
</div>
</div>