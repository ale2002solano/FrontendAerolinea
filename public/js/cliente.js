function habilitarDestino() {
    var select1 = document.getElementById('origen');
    var select2 = document.getElementById('destino');
  
    if (select1.value !== '') {
      select2.disabled = false;
    } else {
      select2.disabled = true;
    }
  }
  
  const opcion1 = document.getElementById('ida');
  const opcion2 = document.getElementById('idaVuelta');
  const miSelect = document.getElementById('origen');
  
  opcion1.addEventListener('click', habilitarSelect);
  opcion2.addEventListener('click', habilitarSelect);
  
  function habilitarSelect() {
    miSelect.disabled = false;
    opcion1.removeEventListener('click', habilitarSelect);
    opcion2.removeEventListener('click', habilitarSelect);
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    var select1 = document.getElementById('origen');
    var select2 = document.getElementById('destino');
    var miBoton = document.getElementById('buscar');

    select1.addEventListener('change', function() {
        validarSeleccion();
    });

    select2.addEventListener('change', function() {
        validarSeleccion();
    });

    function validarSeleccion() {
        if (select1.value !== '' && select2.value !== '') {
            miBoton.disabled = false;
        } else {
            miBoton.disabled = true;
        }
    }

//     //RENDERIZAR DESTINOS
//     function cargarDestinos() {
//       var origenSeleccionado = document.getElementById("origen").value;
//       if (origenSeleccionado !== '') {
//           obtenerDestinos(origenSeleccionado);
//       }
//   }

//   function obtenerDestinos(origen) {
//     fetch(`http://localhost:8080/api/ruta/obtenerDestinos?origen=${origen}`)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('La respuesta de la solicitud no fue exitosa');
//             }
//             return response.json();
//         })
//         .then(destinos => {
//             console.log('Destinos obtenidos:', destinos); // Verifica los destinos obtenidos en la consola
//             var selectDestino = document.getElementById("destino");
//             selectDestino.innerHTML = '<option value="" disabled selected>Selecciona un destino</option>';

//             destinos.forEach(destino => {
//                 var option = document.createElement("option");
//                 option.value = destino;
//                 option.text = destino;
//                 selectDestino.appendChild(option);
//             });

//             selectDestino.disabled = false;
//         })
//         .catch(error => {
//             console.error('Error al obtener los destinos:', error);
//         });
// }

  
});
