<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="base-url" content="{{ url('/') }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/vuelos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
    <script src="https://kit.fontawesome.com/02ade1bbb9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>
    <div id="contenedor">
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid" style="height:100%">
                <a class="navbar-brand"style="height:100%;color: #f2f0eb;font-weight: 700;" href="#" id="nombreAir"><img style="height:100%; object-fit:cover" src="{{asset('img/logo.png')}}" id="home">SkyVibes Airline</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    </ul>
                </div>
            </div>
        </nav>
        <div id="vuelos">
            <div style="height:13%"></div>
            <div id="infoVuelo">
                <div style="height:20%"><h2>Tu destinto</h2></div>
                <div id="infoRuta">
                    <div id="rutaOrigen" class="rutaBloque"><h2>{{$origen = $vuelos[0]['ruta']['origen'];}}</h2><i class="fa-solid fa-chevron-down" style="color: #2a4b83; margin-left:2%; font-size:140%"></i></div>
                    <div id="rutaDestino" class="rutaBloque"><h2>{{$origen = $vuelos[0]['ruta']['destino'];}}</h2><i class="fa-solid fa-chevron-down" style="color: #2a4b83; margin-left:2%; font-size:140%"></i></div>
                </div>
            </div>
            <div id="opcionesVuelo" >
                <div id="vuelo1" class="vueloDetalle">
                    <div style="height:12%" class="vueloIdaVuelta"><h2>Vuelo de Ida</h2></div>
                    <div class="listaV" id="listaVuelos">
                    @foreach ($vuelos as $vuelo)
                    <!-- onclick="MostrarInformacionVuelo({{ json_encode($vuelo) }})" -->
                        <div class="vueloNumeros" onclick="MostrarInformacionVuelo({{ json_encode($vuelo) }})">
                                <div><h4>{{ date('Y-m-d', strtotime($vuelo['fechaPartida'])) }}</h4></div>
                                <div><i class="fa-solid fa-plane-up" style="font-size:260%"></i></div>
                        </div>
                    @endforeach
                    </div>
                    <div  class="espacioV" id="espacioVuelos">
                    <div id="bordeInfo1">
                        <div style="display:flex;justify-content: space-around;width: 20%;">
                            <h3 style="color: white">Vuelo:</h3>
                            <h3 style="color: white"></h3>
                        </div>
                        <div style="display:flex;justify-content: space-around;width: 30%;">
                            <h3 style="color: white">Fecha de Partida</h3>
                            <h3 style="color: white"></h3>
                        </div>
                    </div>
                        <div class="espacioInfo" id="espacioInfoIda">
                            <div class="infoInfo">
                                <div class="horaSalida">
                                    <h4>Salida</h4>
                                    <h3></h3>
                                </div>
                                <div class="tramas">
                                    <hr class="lineas">
                                    <div class="tramaIndividual">
                                        <div class="aeropuerto"><h4></h4></div>
                                    </div>
                                </div>
                                <div class="horaSalida">
                                    <h4>Llegada</h4>
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="irAvion">
                                
                            </div>
                        </div>
                    </div>

                </div>

                @if(isset($_GET['tipo']) && $_GET['tipo'] == "idaVuelta")
                <div id="vuelo2" class="vueloDetalle">
                    <div style="height:12%" class="vueloIdaVuelta"><h2>Vuelo de Regreso</h2></div>
                    <div class="listaV" id="listaVuelos2">
                    @foreach ($vuelosRegreso as $vuelo)
                    <!-- onclick="MostrarInformacionVuelo({{ json_encode($vuelo) }})" -->
                        <div class="vueloNumeros" onclick="MostrarInformacionVuelo2({{ json_encode($vuelo) }})">
                                <div><h4>{{ date('Y-m-d', strtotime($vuelo['fechaPartida'])) }}</h4></div>
                                <div><i class="fa-solid fa-plane-up" style="font-size:260%"></i></div>
                        </div>
                    @endforeach

                        
                    </div>
                    <div class="espacioV" id="espacioVuelos2">
                    <div id="bordeInfo2">
                        <div style="display:flex;justify-content: space-around;width: 20%;">
                            <h3 style="color: white">Vuelo:</h3>
                            <h3 style="color: white">BBC3</h3>
                        </div>
                        <div style="display:flex;justify-content: space-around;width: 30%;">
                            <h3 style="color: white">Fecha de Partida</h3>
                            <h3 style="color: white">23-10-23</h3>
                        </div>
                    </div>
                        <div class="espacioInfo" id="espacioInfoIda2">
                            <div class="infoInfo">
                                <div class="horaSalida">
                                    <h4>Salida</h4>
                                    <h3></h3>
                                </div>
                                <div class="tramas">
                                    <hr class="lineas">
                                    <div class="tramaIndividual">
                                        <div class="aeropuerto"><h4></h4></div>
                                    </div>
                                </div>
                                <div class="horaSalida">
                                    <h4>Llegada</h4>
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="irAvion">
                            </div>
                        </div>
                    </div>

                </div>
                @endif

            </div>
        </div>
    </div>

<script src="{{ asset('js/InformacionVuelos.js') }}"></script>
</body>
</html>