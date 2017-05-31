@extends('layouts.app')

@section('head-link')
  <link href="{{ asset('css/front/home/verification-email-sent.css') }}" rel="stylesheet">
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
        <h1>¡Gracias por registrarte!</h1>
        <h3>Te hemos enviado un correo de verificación</h3>
      </div>
    </header>
    <div class="section-content">
      <div class="container">
        <h5>Da clic en el botón de <em>Continuar</em> en el correo y sigue adelante</h5>
        <p>¿No te llegó el correo? Revisa tu bandeja de correo no deseado o da clic en este botón:</p>
        <nav class="cta-nav">
          <a href="#" class="btn btn-lg btn-info">Reenviar correo <i class="icon-chevron-right"></i></a>
        </nav>
      </div>
    </div>
    <footer class="section-footer"></footer>
  </section>
@endsection
