$(document).ready(function() {
    $('#formularioRegistro').submit(function(event) {
        event.preventDefault(); // Evitar que el formulario se envíe normalmente

        // Obtener la URL base desde la etiqueta meta
        const baseUrl = $('meta[name="base-url"]').attr('content');

        // Ruta relativa para el registro de clientes
        const registroRoute = '/registrarCliente';

        // Construir la URL completa dinámica
        const apiUrl = baseUrl + registroRoute;

        // Obtener los datos del formulario
        const formData = new FormData(this);

        // Realizar la solicitud AJAX POST a la URL dinámica para el registro de clientes
        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                // Manejar la respuesta exitosa aquí
                console.log(data);
                alert('Cliente registrado exitosamente');
                window.location.href = '/login';
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Manejar errores
                if (jqXHR.status === 409) {
                    alert(jqXHR.responseJSON.error); // Muestra el mensaje específico para cliente existente
                } else {
                    console.error(errorThrown);
                    alert('Hubo un error al registrar el cliente');
                }
            }
        });
    });
});
