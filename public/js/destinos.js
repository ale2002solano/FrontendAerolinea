//RENDERIZAR DESTINOS
function cargarDestinos() {
    var origenSeleccionado = document.getElementById("origen").value;
    if (origenSeleccionado !== '') {
        obtenerDestinos(origenSeleccionado);
    }
}

function obtenerDestinos(origen) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', `http://localhost:8080/api/ruta/obtenerDestinos?origen=${origen}`, true);
  
    xhr.onload = function() {
      if (xhr.status >= 200 && xhr.status < 300) {
        var destinos = JSON.parse(xhr.responseText);
        console.log('Destinos obtenidos:', destinos);
  
        var selectDestino = document.getElementById("destino");
        selectDestino.innerHTML = '<option value="" disabled selected>Selecciona un destino</option>';
  
        destinos.forEach(destino => {
          var option = document.createElement("option");
          option.value = destino;
          option.text = destino;
          selectDestino.appendChild(option);
        });
  
        selectDestino.disabled = false;
      } else {
        console.error('La respuesta de la solicitud no fue exitosa');
      }
    };
  
    xhr.onerror = function() {
      console.error('Error al realizar la solicitud');
    };
  
    xhr.send();
  }
  