<!-- Recuperar cuenta -->
<section class="recuperar padding-section container col-md-6 col-lg-5 login-section px-3">
  <h2 class="text-center mb-5">¿ Olvidaste tu contraseña ?</h2>
  <div class="container">
    <form class="form  mx-auto bg-white p-4 shadow">
      <div class="text-center mb-4">
        <img src="<?php echo base_url('assets/img/forgotPasswordIcon.png') ?>" alt="Icono olvidaste contraseña" width="80px">
      </div>
      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <p class="text-center mb-3">Ingresa tu email y te enviaremos el link para resetearla</p>
        <input type="email" id="forgotPasswordEmail" class="form-control" placeholder="ejemplo@correo.com" />
      </div>

      <!-- Submit button -->
      <div class="w-100 text-center">
        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block w-50">Resetear contraseña</button>
      </div>

    </form>
  </div>
</section>