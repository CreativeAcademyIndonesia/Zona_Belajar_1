<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>{{ $pageTitle }}</title>
</head>
<body class="min-h-screen min-w-full">
    @include('layouts.partials.navigation')
    <section>
      @yield('container')
    </section>    
</body>
</html>