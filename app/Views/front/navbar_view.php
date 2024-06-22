<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top p-0 bg-body-tertiary">
  <div class="container-fluid py-2 bg-modified shadow-sm">
    <a class="navbar-brand" href="<?php echo base_url('principal') ?>">
      <img src="<?php echo base_url('assets/img/logoHeader-green.png') ?>" alt="Logo de talentos digitales" width="160px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse p-4 p-lg-0" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 d-flex align-items-md-start align-items-lg-center mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-black active" aria-current="page" href="<?php echo base_url('principal') ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="<?php echo base_url('quienes_somos') ?>">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="<?php echo base_url('acerca_de') ?>">Acerca de</a>
        </li>
      </ul>
      <form class="d-flex mx-auto" role="search">
        <div class="input-group">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success color-white" type="submit">
            <img src="<?php echo base_url('assets/img/searchIcon.svg') ?>" alt="Icono buscador" width="20px" class="light-icon">
          </button>
        </div>
      </form>
      <div class="dropdown mt-3 mt-lg-0">
        <button type="button" class="btn btn-success dropdown-toggle " data-bs-toggle="dropdown">
          Cuenta de usuario
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo base_url('login') ?>">Iniciar sesión</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url('registro') ?>">Registrarse</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>