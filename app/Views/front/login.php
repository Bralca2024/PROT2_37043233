<!-- Login -->
<section class="padding-section container col-md-6 col-lg-5 login-section px-3">
  <h2 class="text-center mb-5">Iniciar sesión</h2>
  <form class="form  mx-auto bg-white p-4 shadow">
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="userEmail">Correo</label>
      <input type="email" id="userEmail" class="form-control" placeholder="Ingrese su correo" />
    </div>
    <!-- Contrasenia input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="userPassword">Contraseña</label>
      <input type="password" id="userPassword" class="form-control" placeholder="Ingrese su contraseña" />
    </div>
    <div class="d-flex align-items-center justify-content-evenly mb-4">
      <!-- Formulario check -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="rememberMe" />
        <label class="form-check-label" for="rememberMe">Recuerdame</label>
      </div>
      <div class="">
        <a href="<?php echo base_url('recuperar_cuenta') ?>">Olvidaste la contraseña?</a>
      </div>
    </div>

    <!-- Submit button -->
    <div class="w-100 text-center">
      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 w-75">Iniciar sesión</button>
    </div>

    <!-- Boton de registro -->
    <div class="text-center">
      <p>No eres un usuario? <a href="registro">Registrate</a></p>
    </div>
  </form>
</section>