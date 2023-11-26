function generarAsientos(cantidadAsientos) {
    var asientosEconomicos = cantidadAsientos-48;
    var filasEconomicas = asientosEconomicos/6;
    document.getElementById('pobres').innerHTML=``;
    document.getElementById('ejecutiva').innerHTML=``;
    document.getElementById('premium').innerHTML=``;

    for (let p = 0; p < 3; p++) {
        num = p+1;
        document.getElementById('premium').innerHTML+=`
        <div id="${"A"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"B"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <span class="material-symbols-outlined"></span>
        <div id="${"E"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"F"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        `   
    }

    for (let e = 5; e < 11; e++) {
        num = e;
        document.getElementById('ejecutiva').innerHTML+=`
        <div id="${"A"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"B"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"C"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <span class="material-symbols-outlined"></span>
        <div id="${"D"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"E"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"F"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        `
        
        
    }

    for (let i = 0; i <filasEconomicas; i++) {
        num = i+18;
        document.getElementById('pobres').innerHTML+=`
        <div id="${"A"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"B"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"C"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <span class="material-symbols-outlined"></span>
        <div id="${"D"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"E"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        <div id="${"F"+num}" class="asiento"><span class="material-symbols-outlined">event_seat</span></div>
        `
        
    }
}