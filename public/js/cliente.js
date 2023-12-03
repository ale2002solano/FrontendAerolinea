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

   $(document).ready(function() {
  $('#origen').change(function() {
    var origenSeleccionado = $(this).val(); // Obtener el valor del origen seleccionado
    obtenerDestinos(origenSeleccionado);
});

// function obtenerDestinos(origen) {
//     $.ajax({
//         type: 'GET',
//         url: '/obtenerDestinos', // La ruta de tu controlador para obtener destinos
//         data: { origen: origen }, // Pasar el origen como parámetro
//         success: function(destinos) {
//             actualizarDestinos(destinos); // Llamar a la función para actualizar los destinos
//             console.log(destinos);
//         },
//         error: function() {
//             console.log('Error al obtener destinos');
//         }
//     });
// }

function actualizarDestinos(destinos) {
    var destinoSelect = $('#destino');
    destinoSelect.empty(); // Limpiar select de destinos

    // Agregar opciones al select de destinos con un bucle foreach
    $.each(destinos, function(key, value) {
        destinoSelect.append('<option value="' + key + '">' + value + '</option>');
    });
}
});

  
});


//DESTINOS
$(document).ready(function() {
  $('#origen').change(function() {
      var origenSeleccionado = $(this).val(); // Obtener el valor del origen seleccionado
      obtenerDestinos(origenSeleccionado);
  });

  function obtenerDestinos(origen) {
    console.log(origen);
    
      $.ajax({
          url: `http://localhost/FrontendAerolinea/public/conejo?origen=${origen}`,
          type: 'GET',
          dataType:"json", 
          success: function(destinos) {
              actualizarDestinos(destinos); // Llamar a la función para actualizar los destinos
              console.log(destinos);
          },
          error: function() {
              console.log('Error al obtener destinos');
          }
      });
  }

  function actualizarDestinos(destinos) {
      var destinoSelect = $('#destino');
      destinoSelect.empty(); // Limpiar select de destinos

      // Agregar opciones al select de destinos con un bucle foreach
      $.each(destinos, function(key, value) {
          destinoSelect.append('<option value="' + key + '">' + value + '</option>');
      });
  }
});