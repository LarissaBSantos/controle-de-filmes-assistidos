<!DOCTYPE html>
<html>
  <head>
      <title>Controle de filmes assistidos</title>
      <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  </head>
  <body>
    <header class="header">
      <x-header/>
    </header>
    <main class="container">
      @yield('content')
      <x-add-movie/>
    </main>
  </body>
</html>

<script>
  function showForm(){
    document.querySelector('.form-container.none').classList.remove('none');
  }
  function hiddenForm(){
    document.querySelector('.form-container').classList.add('none');
  }
</script>
