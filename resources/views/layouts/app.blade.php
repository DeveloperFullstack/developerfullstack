<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
  <link href="{{ asset('css/front/landing/home.css') }}" rel="stylesheet">
  <link rel="icon" type="image/png" href="/img/favicon_devfs.png">
</head>
<body>
  <div id="app">
    <header class="header">
      <div class="container">
        <div class="header-left">
          <a href="#" class="logo"><img src="/img/logo_devfs-light.png" alt="DevFS"></a>
        </div>
        <div class="header-center"></div>
        <div class="header-right">
          <nav>

          </nav>
        </div>
      </div>
    </header>
    @yield('content')
  </div>
</body>
</html>
