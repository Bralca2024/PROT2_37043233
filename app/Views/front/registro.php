<!-- Registro -->
<section class="container register-section col-md-6 col-lg-5 padding-section px-3">
  <h2 class="text-center mb-5">Registrarse</h2>
  <form class="bg-white p-5 shadow mx-auto">
    <!-- Nombre input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="userName">Nombre</label>
      <input type="text" id="userName" class="form-control" placeholder="Ingrese su nombre" />
    </div>
    <!-- Apellido input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="userSurname">Apellido</label>
      <input type="text" id="userSurname" class="form-control" placeholder="Ingrese su apellido" />
    </div>

    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="userRegisterEmail">Email</label>
      <input type="email" id="userRegisterEmail" class="form-control" placeholder="Ingrese su correo" />
    </div>

    <!-- Usuario input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="userNickName">Usuario</label>
      <input type="text" id="userNickName" class="form-control" placeholder="Ingrese su nombre de usuario" />
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="userRegisterPassword">Contraseña</label>
      <input type="password" id="userRegisterPassword" class="form-control" placeholder="Ingrese su contraseña" />
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="userRepeatPassword">Repita la contraseña</label>
      <input type="password" id="userRepeatPassword" class="form-control" placeholder="Repita su contraseña" />
    </div>

    <div class="form-check mb-4">
      <input type="checkbox" class="form-check-input" id="terms">
      <label class="form-check-label" for="terms">Acepto los términos y condiciones</label>
    </div>

    <!-- Submit button -->
    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Crear cuenta</button>

  </form>
</section>