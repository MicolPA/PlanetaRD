<div class="row mt-5 pt-5">
  <div class="col-lg-3"></div>
<form class="form-signin col-lg-6 pl-5 pr-5" action="<?php echo base_url('auth/login') ?>" method="post">
      <div class="text-center mb-4">
        <img class="mb-4" src="<?php echo base_url('assets/images/logo.png') ?>" alt="" width="120" height="120">
        <h1 class="h3 mb-3 font-weight-normal">Iniciar sesion</h1>
      </div>

      <div class="mb-3 form-label-group">
        <input type="email" id="user" name="user" class="form-control text-center" placeholder="Usuario" required autofocus>
      </div>

      <div class="mb-3 form-label-group">
        <input type="password" name="pass" id="pass" class="form-control text-center" placeholder="Contraseña" required>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; PlanetaRD</p>
    </form>
<div class="col-lg-3"></div>
 
</div>   
