<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    echo view('front/head_view');
    echo view('front/navbar_view');
    echo view('front/principal');
    echo view('front/certificaciones_view');
    echo view('front/cursos_view');
    echo view('front/testimoniales_view');
    echo view('front/footer_view');
  }
  public function formulario()
  {
    echo view('front/head_view');
    echo view('front/navbar_view');
    echo view('front/formulario');
    echo view('front/footer_view');
  }
  public function recuperar_cuenta()
  {
    echo view('front/head_view');
    echo view('front/navbar_view');
    echo view('front/recuperar_cuenta');
    echo view('front/footer_view');
  }
  public function quienes_somos()
  {
    echo view('front/head_view');
    echo view('front/navbar_view');
    echo view('front/quienes_somos');
    echo view('front/integrantes');
    echo view('front/footer_view');
  }
  public function acerca_de()
  {
    echo view('front/head_view');
    echo view('front/navbar_view');
    echo view('front/acerca_de');
    echo view('front/informacion_contacto');
    echo view('front/servicios');
    echo view('front/footer_view');
  }
  public function login()
  {
    echo view('front/head_view');
    echo view('front/navbar_view');
    echo view('front/login');
    echo view('front/footer_view');
  }
  public function registro()
  {
    echo view('front/head_view');
    echo view('front/navbar_view');
    echo view('front/registro');
    echo view('front/footer_view');
  }
}
