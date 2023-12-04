<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\BoletoController;
use App\Http\Controllers\RegistroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', function () {
    return view('Registro');
});

Route::get('/home', function () {
    return view('Home');
})->name('home');

Route::get('/perfil', function () {
    return view('Cliente');
})->name('perfil');


Route::get('/login', function () {
    return view('Login');
});

//BOTONES DEL LOGIN
Route::get('/home/login/registrarse',[LoginController::class, 'registrarse'])->name('registrarse');
//FIN BOTONES DEL LOGIN

//BOTONES DEL HOME
Route::get('/home/login',[LoginController::class, 'index'])->name('login');
//FIN BOTONES HOME

// CONSUMO DE LAS APIS DE GUZZLE
Route::post('/login',[LoginController::class, 'login'])->name('login.post');
Route::get('/login/obtenerOrigenes',[ClienteController::class, 'obtenerOrigenes'])->name('Origenes');
Route::get('/obtenerDestinos', 'LoginController@obtenerDestinosPorOrigen')->name('obtenerDestinos');

Route::get('/conejo',[LoginController::class, 'conejo'])->name('gato');

Route::get('/vuelos',[VuelosController::class, 'MostrarVuelosPorRuta'])->name('mostrarVuelos');

Route::get('/vuelos/escala',[VuelosController::class, 'MostrarEscalasVuelo'])->name('mostrarEscalas');

Route::get('/asientoPorVuelo/{idVuelo}',[VuelosController::class, 'ObtenerAsientosVuelo'])->name('asientosCantidad');

Route::get('/reservarAsientos/{idAsiento}/{idVuelo}',[BoletoController::class, 'ReservarAsiento'])->name('reservarAsiento');

Route::post('crearBoleto',[BoletoController::class, 'CrearBoleto'] )->name('crearBoleto');

Route::post('/registrarCliente', [ClienteController::class, 'registrarCliente'])->name('registrar');