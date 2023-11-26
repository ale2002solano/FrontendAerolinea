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
    <button onclick="generarAsientos(120)">Generar</button>
    </div>   
    <div id="avionDiseño">
        <div id="diseñoIzquierda">
            <div class="lateral"></div>
            <div class="lateral"  id="aleta1"><div id="sombra1"></div></div>
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
            <div class="lateral" id="aleta2"></div> 
            <div class="lateral"></div> 
            <div id="colaLateral2"></div>
        </div>
    </div>

    <img id="navidad" src="{{ asset('img/trineoSanta.webp') }}" alt="">

<!-- <span class="material-symbols-outlined">event_seat</span>
<span class="material-symbols-outlined">chair</span>
<span class="material-symbols-outlined">chair_alt</span> -->
<script src="{{ asset('js/avion.js') }}"></script>
</body>
</html>