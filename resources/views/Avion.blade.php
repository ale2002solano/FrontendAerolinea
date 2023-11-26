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
    <div id="avion">
        <div id="premium">
        </div>
        <div id="ejecutiva">
        </div>
        <div id="pobres">
        </div>
    </div>
    <button onclick="generarAsientos(121)">Generar</button>
    <div id="avionDiseño">
        <div id="avionIzquierda">
            <div id="aletaIzquierda"></div>
        </div>
        <div id="avionCentro">
            <div id="diseñoCabeza"></div>
            <div id="diseñoCuerpo"></div>
            <div id="diseñoCola"></div>
        </div>
        <div id="avionDerecha">
            <div id="aletaDerecha"></div>
        </div>
    </div>

<!-- <span class="material-symbols-outlined">event_seat</span>
<span class="material-symbols-outlined">chair</span>
<span class="material-symbols-outlined">chair_alt</span> -->
<script src="{{ asset('js/avion.js') }}"></script>
</body>
</html>