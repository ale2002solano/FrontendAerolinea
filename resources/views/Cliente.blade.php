<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil SkyVibes Airline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/cliente.css')}}">
    <link rel="icon" href="{{asset('img/logo.ico')}}">
</head>
<body>

<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}" id="nombreAir"><img src="{{asset('img/logo.png')}}" id="home">SkyVibes Airline</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      </ul>
      <form class="d-flex" role="search">
      @if(session()->has('nombre_completo'))
        <div class="nombre"><i id="user" class="fa-solid fa-circle-user fa-xl" ></i>  {{ session('nombre_completo') }}</div>
        @endif
      </form>
    </div>
  </div>
</nav>

<!-- INICIO CAROUSEL -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/car1.jpeg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/car2.jpeg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/car3.jpeg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- FINAL CAROUSEL -->

<div class="vuelos">
  <div class="header">
  <i class="fa-solid fa-plane-departure"></i>  Vuelos
  </div>
  <form action="" class="vuelo">
    <input type="radio" name="tipoVuelo" id="ida" value="ida"><label for="ida">Ida</label>
    <input type="radio" name="tipoVuelo" id="idaVuelta" value="idaVuelta"><label for="idaVuelta">Ida y vuelta</label><br><br>
    <p>Desde</p>
    <select name="Origen" id="origen" onchange="habilitarDestino();" disabled>
    <option value="" disabled selected>Selecciona un origen</option>
    @foreach($origenes as $origen)
    <option value="{{ $origen }}">{{ $origen }}</option>
    @endforeach
    </select><br><br>
    <p>Hacia</p>
    <select name="Destino" id="destino" disabled>
    <option value="" disabled selected>Selecciona un destino</option>
    <option value="opcion1">Opción 1</option>
    <option value="opcion2">Opción 2</option>
    <option value="opcion3">Opción 3</option>
    </select><br><br>
    <button class="btn-buscar" id="buscar" disabled>Buscar</button>

  </form><br><br>
</div>





<script src="{{ asset('js/cliente.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>