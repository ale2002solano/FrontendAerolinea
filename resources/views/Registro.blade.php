<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up SkyVibes Airline</title>
    <meta name="base-url" content="{{ url('/') }}">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link rel="icon" href="{{asset('img/logo.ico')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <div id="izquierda">
        <div id="contenedor">
            <img src="{{ asset('img/ala-avion.jpg') }}" alt="" id="imagen">
        </div>
        <div id="texto">
                <p>"El cielo no es el límite,<br>es solo el punto de partida."</p>
            </div>    

    </div>
    <div id="derecha">
    <a href="{{route('home')}}" id="back"><i class="fa-solid fa-arrow-left" style="color: #295675;"></i> Regresar</a>
        <h2 >Registro</h2>
        <form id="formularioRegistro" action="{{route('registrar')}}" metodo="POST">
            @csrf
            @method('POST')
            <input class="inputRegistro" type="text" name="nombre" placeholder="Nombre">
            <input class="inputRegistro" type="text" name="apellido" placeholder="Apellido" >
            <input class="inputRegistro" type="text" name="correo" placeholder="Correo electronico">
            <input class="inputRegistro" type="text" name="telefono" placeholder="Telefono">
            <input class="inputRegistro" type="password" name="password" placeholder="Contraseña">
            <button class="botonRegistro" type="submit">Guardar</button>
        </form>
        <img src="{{ asset('img/logoregistro1.png') }}" alt="" id="logo">

    </div>

    <img src="{{ asset('img/nubes.png') }}" alt="" id="nubes" style="width: 100%">
    <img src="{{ asset('img/nubes.png') }}" alt="" id="nubes" style="mix-blend-mode:multiply; width: 100%;">
    <img src="{{ asset('img/nubes.png') }}" alt="" id="nubes" style="mix-blend-mode:multiply; width: 100%;">

    <img src="{{ asset('img/Trineo.webp') }}" alt="" id="trineo">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Manejar errores
                    console.error(errorThrown);
                    alert('Hubo un error al registrar el cliente');
                }
            });
        });
    });
</script>

    
</body>
</html>