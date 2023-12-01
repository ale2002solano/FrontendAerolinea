<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SkyVibes Airline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="icon" href="{{asset('img/logo.ico')}}">
</head>
<body>
    <div class="principal">
    <div class="contenedorfondo">
        <div class="header">
        <a href="{{URL::previous()}}" id="back"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Regresar</a>
            <img src="../img/logo.png" id="logo">
        </div>
    </div>
    <div class="cotenido">
        <form action="/login" method="post">
        <input type="text" name="username" id="username" placeholder="username">
        <br>
        <input type="password" name="password" id="password" placeholder="password">
        <br>
        <button class="login-btn">Login</button>
        <br>
        <a href="{{route('registrarse')}}">¿Aún no tienes una cuenta?</a>
        </div><br><br><br>
        </form>
    <img src="{{ asset('img/nubes.png') }}" alt="" id="nubes" style="width: 100%">
    <img src="{{ asset('img/nubes.png') }}" alt="" id="nubes" style="mix-blend-mode:multiply; width: 100%;">
    <img src="{{ asset('img/nubes.png') }}" alt="" id="nubes" style="mix-blend-mode:multiply; width: 100%;">
    
</body>
</html>