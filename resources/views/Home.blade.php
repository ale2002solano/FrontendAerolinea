<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyVibes Airline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="icon" href="{{asset('img/logo.ico')}}">
</head>
<body>
    
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="nombreAir"><img src="{{asset('img/logo.png')}}" id="home">SkyVibes Airline</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      </ul>
      <form class="d-flex" role="search">
        <button type="button" class="btn-login" onclick="window.location.href='{{route('login')}}'"><i id="user" class="fa-solid fa-circle-user fa-xl"></i>  Iniciar Sesión</button>
        <select name="opciones" id="opciones">
        <option value="opcion1">Honduras</option>
        <option value="opcion2">Guatemala</option>
        <option value="opcion3">Panama</option>
        <!-- Puedes agregar más opciones si lo deseas -->
    </select>
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
<br><br>
<h1>Vuela más,paga menos: Vuelos baratos en SkyVibe Airline</h1>
<div class="relleno">
<div class="card" style="width: 18rem;">
<i class="fa-solid fa-coins fa-2xl" style="color: #295675;"></i>
  <div class="card-body">
    <h5 class=""><b>Nuestras Tarifas</b></h5>
    <p class="card-text">
  Una tarifa hecha a tu medida, para que puedas volar sin preocupaciones, llevando solo tu bolso de mano, 
  más tu chaqueta o abrigo y en un asiento asignado aleatoriamente.
  Y recuerda que siempre podrás agregar los servicios adicionales que necesites.</p>
  </div>
</div>

<div class="card" style="width: 18rem;">
<i class="fa-solid fa-handshake-simple fa-2xl" style="color: #295675;"></i>
  <div class="card-body">
    <h5 class=""><b>Derechos del pasajero</b></h5>
    <p class="card-text">Los derechos de los pasajeros en el avión pueden variar dependiendo de la región y 
      las regulaciones específicas del país o área geográfica. Sin embargo, 
      hay ciertos derechos generales que suelen aplicarse en la mayoría de los casos</p>
  </div>
</div>

<div class="card" style="width: 18rem;">
<i class="fa-solid fa-hand-holding-dollar fa-2xl" style="color: #295675;"></i>
  <div class="card-body">
    <h5 class=""><b>Tarifa de servicios</b></h5>
    <p class="card-text">Entérate a continuación de los precios de cada servicio adicional, 
      y cómo estos varían en los distintos instantes donde podrás adquirirlos. Si tienes alguna duda o necesitas más información, 
      consulta a través de nuestro chat online o llamanos.</p>
  </div>
</div>
</div>

    




<script src="{{ asset('js/home.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>