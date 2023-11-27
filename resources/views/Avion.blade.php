<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{ asset('css/avion.css') }}">
    
</head>
<body>
    <div id="boleto">
        <div id="boletoTitulo">
            <h2 style="font-size:40px; margin: 0 30px; font-weight=bolder" >Boleto</h2>
        </div>
        <div id="boletoRuta"><h2>Ruta:</h2></div>
        <div id="boletoInfo">
            <h2 id="CompradorInfo" style="margin:5px 0 0 0">Comprador:</h2>
            <br>
            <h2 id="CompradorAsiento" style="margin: 5px 0 0 5px">Asiento:</h2></div>
        <div id="boletoBoton"><button id="botonCompra" onclick="generarAsientos(150)">Generar</button></div>
        <div id="boletoDecoracion">
            <!-- <img src="{{ asset('img/nubes.png') }}" alt="" class="nubesDecoracion" style="width: 100%">
            <img src="{{ asset('img/nubes.png') }}" alt="" class="nubesDecoracion" style="mix-blend-mode:multiply; width: 100%;">
            <img src="{{ asset('img/nubes.png') }}" alt="" class="nubesDecoracion" style="mix-blend-mode:multiply; width: 100%;"> -->
        </div>

        <img src="{{ asset('img/logoregistro1.png') }}" alt="" id="logo">        
    </div>  

    <div id="avionDiseño" class="avionNormal">
        <div id="diseñoIzquierda">
            <div class="lateral"></div>
            <div class="lateral"  id="aleta1"><div id="sombra1"></div><div id="estampado2"></div></div>
            <div class="lateral"></div>
            <div id="colaLateral"><div id="sombra2"></div></div>
        </div>
        <div id="diseñoCentro">
            <div id="centroCabeza">
            <div id="relleno"></div>
            </div>
                <div id="centroCuerpo">
                    
                    <div id="premium">
                    </div>
                    <div id="ejecutiva">
                    </div>
                    <div id="pobres">
                </div>
            </div>
            <div id="centroCola"></div>
        </div>
        <div id="diseñoDerecha">
            <div class="lateral"></div> 
            <div class="lateral" id="aleta2"><div id="estampado"></div></div> 
            <div class="lateral"></div> 
            <div id="colaLateral2"></div>
        </div>
    </div>

    <img id="navidad" src="{{ asset('img/trineoSanta.webp') }}" alt="">

    <div id="nubes0" class="nubes">
        <div class="nubeMain" style="right: 22%;top: 43%;background-color: #cedfef96;z-index: 1;mix-blend-mode: color;"></div>
        <div class="nubeMain"></div>
        <div class="nubeMain" style="right: -37%;top: 25%;background-color: #cedfef96;z-index: 1;mix-blend-mode: color; "></div>
    </div>

    <div id="nubes2" class="nubes">
        <div class="nubeMain" style="right: 22%;top: 43%;background-color: #cedfef96;z-index: 1;mix-blend-mode: color;"></div>
        <div class="nubeMain"></div>
        <div class="nubeMain" style="right: -37%;top: 25%;background-color: #cedfef96;z-index: 1;mix-blend-mode: color; "></div>
    </div>

    <div id="nubes3" class="nubes">
        <div class="nubeMain" style="right: 22%;top: 43%;background-color: #cedfef96;z-index: 1;mix-blend-mode: color;"></div>
        <div class="nubeMain"></div>
        <div class="nubeMain" style="right: -37%;top: 25%;background-color: #cedfef96;z-index: 1;mix-blend-mode: color; "></div>
    </div>

    <div id="nubes4" class="nubes">
        <div class="nubeMain" style="right: 22%;top: 43%;background-color: #cedfef96;z-index: 1;mix-blend-mode: color;"></div>
        <div class="nubeMain"></div>
        <div class="nubeMain" style="right: -37%;top: 25%;background-color: #cedfef96;z-index: 1;mix-blend-mode: color; "></div>
    </div>

    <div id="avionNav">
        <div class="claseNav" id="clasePrimera"><div class="colorcito" style="background-color:#ffc446bd"></div><h2 class="clasismo">Primera Clase</h2></div>
        <div class="claseNav"id="claseEjecutiva"> <div class="colorcito" style="background-color:#5f9dc7b3"></div><h2 class="clasismo">Clase Ejecutiva</h2></div>
        <div class="claseNav" id="claseEconomica"><div class="colorcito" style="background-color:#51d760c4"></div><h2 class="clasismo">Clase Economica</h2></div>
    </div>

    <div id="acercar" onclick="aumentarAvion()">
        <h2>Acercar</h2>
    </div>
<!-- <span class="material-symbols-outlined">event_seat</span>
<span class="material-symbols-outlined">chair</span>
<span class="material-symbols-outlined">chair_alt</span> -->
<script src="{{ asset('js/avion.js') }}"></script>
</body>
</html>