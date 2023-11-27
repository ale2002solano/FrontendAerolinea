function generarAsientos(cantidadAsientos) {
    var asientosEconomicos = cantidadAsientos-48;
    var filasEconomicas = asientosEconomicos/6;
    document.getElementById('pobres').innerHTML=``;
    document.getElementById('ejecutiva').innerHTML=``;
    document.getElementById('premium').innerHTML=``;

    for (let p = 0; p < 3; p++) {
        num = p+1;
        document.getElementById('premium').innerHTML+=`
        <div id="${"A"+num}" onclick="reservarAsiento('${"A"+num}')" class="asientoPeque"><span style="font-size: 1.6em"class="material-symbols-outlined">event_seat</span></div>
        <div id="${"B"+num}" onclick="reservarAsiento('${"B"+num}')" class="asientoPeque"><span style="font-size: 1.6em"class="material-symbols-outlined">event_seat</span></div>
        <span class="material-symbols-outlined"></span>
        <div id="${"E"+num}" onclick="reservarAsiento('${"E"+num}')" class="asientoPeque"><span style="font-size: 1.6em"class="material-symbols-outlined">event_seat</span></div>
        <div id="${"F"+num}" onclick="reservarAsiento('${"F"+num}')" class="asientoPeque"><span style="font-size: 1.6em"class="material-symbols-outlined">event_seat</span></div>
        `   
    }

    for (let e = 5; e < 11; e++) {
        num = e;
        document.getElementById('ejecutiva').innerHTML+=`
        <div id="${"A"+num}" onclick="reservarAsiento('${"A"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"B"+num}" onclick="reservarAsiento('${"B"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"C"+num}" onclick="reservarAsiento('${"C"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <span class="material-symbols-outlined"></span>
        <div id="${"D"+num}" onclick="reservarAsiento('${"D"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"E"+num}" onclick="reservarAsiento('${"E"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"F"+num}" onclick="reservarAsiento('${"F"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        `
        
        
    }

    for (let i = 0; i <filasEconomicas; i++) {
        num = i+18;
        document.getElementById('pobres').innerHTML+=`
        <div id="${"A"+num}" onclick="reservarAsiento('${"A"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"B"+num}" onclick="reservarAsiento('${"B"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"C"+num}" onclick="reservarAsiento('${"C"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <span class="material-symbols-outlined"></span>
        <div id="${"D"+num}" onclick="reservarAsiento('${"D"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"E"+num}" onclick="reservarAsiento('${"E"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"F"+num}" onclick="reservarAsiento('${"F"+num}')" class="asientoPeque"><span class="material-symbols-outlined">event_seat</span></div>
        `
        
    }
}

function aumentarAvion(){
    document.getElementById('avionDiseño').style.bottom ="-305%"
    document.getElementById('avionDiseño').style.animation ="avionAumento 2.5s cubic-bezier(0.3, 0, 0.7, 1)"
    document.getElementById('avionDiseño').classList.add('avionCreciendo');
    document.getElementById('avionDiseño').classList.remove('avionNormal');
    var asientos = document.getElementsByClassName('asientoPeque');
    Array.from(asientos).forEach(asiento => {
        asiento.classList.add('asientoJumbo');
        asiento.classList.remove('asientoPeque');
    });
    document.getElementById('acercar').setAttribute('onclick', 'disminuirAvion()');
    document.getElementById('acercar').innerHTML=`
    <h2>Alejar</h2>
    `

    document.getElementById('clasePrimera').setAttribute('onclick', 'MostrarClase("-305%")');
    document.getElementById('claseEjecutiva').setAttribute('onclick', 'MostrarClase("-256%")');
    document.getElementById('claseEconomica').setAttribute('onclick', 'MostrarClase("-155%")');

}

function disminuirAvion() {
    A="-305%";
    document.getElementById('avionDiseño').style.bottom ="0"
    document.getElementById('avionDiseño').style.animation ="avionLlegando 2.5s cubic-bezier(0.3, 0, 0.7, 1)"
    document.getElementById('avionDiseño').classList.remove('avionPorClases')
    document.getElementById('avionDiseño').classList.add('avionNormal');
    document.getElementById('avionDiseño').classList.remove('avionCreciendo');
    var asientos = document.getElementsByClassName('asientoJumbo');
    Array.from(asientos).forEach(asiento => {
        asiento.classList.add('asientoPeque');
        asiento.classList.remove('asientoJumbo');
    });
    document.getElementById('acercar').setAttribute('onclick', 'aumentarAvion()');
    document.getElementById('acercar').innerHTML=`
    <h2>Acercar</h2>
    `

    document.getElementById('clasePrimera').setAttribute('onclick', null);
    document.getElementById('claseEjecutiva').setAttribute('onclick', null);
    document.getElementById('claseEconomica').setAttribute('onclick', null);
}

let A="-305%";
function MostrarClase(bottom,posicion) {
   
    document.getElementById('avionDiseño').style.bottom=`${bottom}`;;
    let B;
    switch (A) {
        case "-305%":
            B ="A"
            break;
        case "-256%":
            B="B"
            break;
        case "-155%":
            B="C"
            break;
        default:
            break;
    }
    document.getElementById('avionDiseño').classList.add('avionPorClases')
    switch (bottom) {
        case "-305%":

            document.getElementById('avionDiseño').style.animation=`mostrandoClase${B+"A"} 1.5s cubic-bezier(0.3, 0, 0.7, 1)`
            document.getElementById('premium').style
            A="-305%";
            break;
        case "-256%":
            console.log(B)

            document.getElementById('avionDiseño').style.animation=`mostrandoClase${B+"B"} 1.5s cubic-bezier(0.3, 0, 0.7, 1)`
            A="-256%";
            break;
        case "-155%":

            document.getElementById('avionDiseño').style.animation=`mostrandoClase${B+"C"} 1.5s cubic-bezier(0.3, 0, 0.7, 1)`
            A="-155%";
            break;
        default:
            break;
    }
    
}

function reservarAsiento(codigoAsiento) {
    console.log("Reserving " + codigoAsiento)

}