<!-- Formulario -->
<section class="padding-section container col-md-6 col-lg-5 formulario-section px-3">
  <h2 class="text-center mb-5">Formulario de contacto</h2>
  <div class="container bg-light p-5">
    <form>
      <!-- Nombre input -->
      <div class="mb-3">
        <label for="formName" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="formName" required placeholder = "Ingrese su nombre">
      </div>
      <!-- Apellido input -->
      <div class="mb-3">
        <label for="formSurname" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="formSurname" required placeholder = "Ingrese su apellido">
      </div>
      <!-- Correo input -->
      <div class="mb-3">
        <label for="formEmail" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="formEmail" aria-describedby="emailHelp" required placeholder = "ejemplo@correo.com">
      </div>
      <!-- Categoria select -->
      <div class="mb-3">
        <label for="cursoCategoria" class="form-label">Recibe toda la información sobre el curso:</label>
        <select class="form-select" id="cursoCategoria" required>
          <option selected>Selecciona una opción...</option>
          <option value="frontend">Frontend</option>
          <option value="backend">Backend</option>
          <option value="fullstack">Full Stack</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary mt-2">Enviar</button>
    </form>
  </div>
</section>