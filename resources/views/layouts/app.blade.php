<!DOCTYPE html>
<html>
  <head>
      <title>Controle de filmes assistidos</title>
      <link rel="stylesheet" href="{{ asset('css/main.css') }}">
      @stack('styles')
  </head>
  <body>
    <header class="header">
      <x-header/>
    </header>
    <main class="container">
      @yield('content')
    </main>
    @stack('scripts')
  </body>
</html>
