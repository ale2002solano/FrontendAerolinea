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

    //RENDERIZAR ORIGENES
        // document.addEventListener('DOMContentLoaded', function() {
        //   // Obtener el elemento select por el id
        //   var selectOrigen = document.getElementById('origen');
    
        //   // Realizar la solicitud GET al servidor
        //   fetch('/obtenerOrigenes')
        //       .then(function(response) {
        //           if (!response.ok) {
        //               throw new Error('No se pudo conectar al servidor');
        //           }
        //           return response.json();
        //       })
        //       .then(function(data) {
        //           // Limpiar el select por si tiene opciones anteriores
        //           selectOrigen.innerHTML = '';
        //           // Agregar la opción predeterminada
        //           var defaultOption = document.createElement('option');
        //           defaultOption.value = '';
        //           defaultOption.text = 'Selecciona un origen';
        //           defaultOption.disabled = true;
        //           defaultOption.selected = true;
        //           selectOrigen.appendChild(defaultOption);//agregar un nuevo elemento como hijo al elemento padre
    
        //           // Agregar las opciones de origen obtenidas
        //           data.forEach(function(origen) {
        //               var option = document.createElement('option'); // Reemplaza 'valor' con el campo correcto de tu origen
        //               option.text = origen.nombre; // Reemplaza 'nombre' con el campo correcto de tu origen
        //               selectOrigen.appendChild(option);
        //           });
    
              
//           })
//           .catch(function(error) {
//               console.error('Error al obtener los origenes', error);
//           });
//   });
  
});
