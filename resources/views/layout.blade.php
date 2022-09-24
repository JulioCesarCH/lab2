<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield("titulo")</title>
  <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0373fc">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SGS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/clientes">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/suscripciones">Suscribirse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/salir">Salir</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container">
    @yield("contenido")
  </div>
  <script src="{{ asset("js/bootstrap.min.js")}}"></script>
  @yield("scripts")
</body>
</html>