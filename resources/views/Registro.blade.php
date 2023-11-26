<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up SkyVibes Airline</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link rel="icon" href="../img/logo.ico">

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
        <h2 >Registro</h2>
        <form action="" id="formularioRegistro">
            <input class="inputRegistro" type="text" name="nombre" placeholder="Nombre">
            <input class="inputRegistro" type="text" name="apellido" placeholder="Apellido" >
            <input class="inputRegistro" type="text" name="correo" placeholder="Correo electronico">
            <input class="inputRegistro" type="text" name="telefono" placeholder="Telefono">
            <input class="inputRegistro" type="password" name="password" placeholder="Contraseña">
            <button type="submit" class="botonRegistro">Guardar</button>
        </form>
        <img src="{{ asset('img/logoregistro1.png') }}" alt="" id="logo">

    </div>

    <img src="{{ asset('img/nubes.png') }}" alt="" id="nubes" style="width: 100%">
    <img src="{{ asset('img/nubes.png') }}" alt="" id="nubes" style="mix-blend-mode:multiply; width: 100%;">
    <img src="{{ asset('img/nubes.png') }}" alt="" id="nubes" style="mix-blend-mode:multiply; width: 100%;">

    <img src="{{ asset('img/Trineo.webp') }}" alt="" id="trineo">
</body>
</html>