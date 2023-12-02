function MostrarInformacionVuelo(vuelo){


    
    document.getElementById('espacioInfoIda').innerHTML =`
    <div class="infoInfo">
    <div class="horaSalida">
        <h4>Salida</h4>
        <h3>${vuelo.horaPartida}</h3>
    </div>
    <div class="tramas">
        <hr class="lineas">
        <div class="tramaIndividual">
            <div class="circulo"></div>
            <div class="aeropuerto"><h4>Aeropuerto toncontin</h4></div>
        </div>
        <div class="tramaIndividual">
            <div class="circulo"></div>
            <div class="aeropuerto"><h4>Aeropuerto </h4></div>
        </div>
    </div>
        <div class="horaSalida">
        <h4>Llegada</h4>
        <h3>${vuelo.horaLlegada}</h3>
    </div>
</div>
<div class="irAvion">
    <button id="botonViajar">Viajar</button>
</div>
    `
}

// "idVuelo" => "BB3C"
// "aerolinea" => array:2 [▶]
// "ruta" => array:4 [▶]
// "fechaPartida" => "2023-07-20"
// "numeroVuelo" => 455
// "horaPartida" => "10:00"
// "horaLlegada" => "13:15"
// "gate" => 5
// "tipoVuelo" => true