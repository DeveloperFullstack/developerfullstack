@extends('layouts.app')

@section('head-link')
  <link href="{{ asset('css/front/errors/404.css') }}" rel="stylesheet">
@endsection

@section('logo-img')
  <a href="{{ url('/') }}" class="logo">
    <img src="/img/logo_devfs-light.png" alt="DevFS">
  </a>
@endsection

@section('content')
  <section class="section hero-unit">
    <div class="StripeBackground accelerated stripes-header">
      <div class="stripe s0"></div>
      <div class="stripe s1"></div>
      <div class="stripe s2"></div>
      <div class="stripe s3"></div>
      <div class="stripe s4"></div>
      <div class="stripe s5"></div>
      <div class="stripe s6"></div>
    </div>
    <div class="section-content">
      <div class="container">
        <h1>404</h1>
        <h2>Aquí no hay narnia mijo</h2>
      </div>
    </div>
  </section>
@endsection















