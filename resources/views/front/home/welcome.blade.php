@extends('layouts.app')

@section('head-link')
  <link href="{{ asset('css/front/home/welcome.css') }}" rel="stylesheet">
@endsection

@section('logo-img')
  <a href="#" class="logo">
    <img src="/img/logo_devfs-shadow.png" alt="DevFS">
  </a>
@endsection

@section('content')
  <section class="section" id="welcome">
    <header class="section-header">
      <div class="container">
        <h1>¡Bienvenido!</h1>
        <h3>Este es el comienzo de una gran carrera</h3>
      </div>
    </header>
    <div class="section-content">
      <div class="container">
        <h5>A continuación, te haremos una serie de preguntas para evaluar tu perfil.</h5>
        <nav class="cta-nav">
          <a href="#" class="btn btn-lg btn-info">Continuar <i class="icon-chevron-right"></i></a>
        </nav>
      </div>
    </div>
    <footer class="section-footer"></footer>
  </section>
@endsection
