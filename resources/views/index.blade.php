<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radni nalozi GPS</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>

  <script src="{{ asset('js/app.js') }}" type="text/js"></script>


  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/administracijas/create">Administracija</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kupacs/create">Kupac</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/operaters/create">Operater</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/statuses/create">Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/nalogs/create">Nalog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/nalogs">Pretraga</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    @yield('main')
  </div>
</body>
</html>
