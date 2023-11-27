<!doctype html>
<html class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>
<body class="min-h-screen min-w-full">
    <header></header>
    
    <main class="flex">
      @include('layouts.partials.sidebar')
      <div class="w-full">
        @include('layouts.partials.navigation')
        @yield('container')
      </div>
    </main>   
    <footer>
    
    </footer> 
    @include('layouts.script')
    
</body>
</html>