<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,500" rel="stylesheet">
  @yield('head-link')
  <link rel="icon" type="image/png" href="/img/favicon_devfs.png">
</head>
<body>
  <div id="app">
    @include('includes/header')

    @yield('content')

  </div>
  @yield('footer-script')
</body>
</html>
