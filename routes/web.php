<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/avion', function () {
    return view('Avion');
});

Route::get('/login', function () {
    return view('Login');
});

//BOTONES DEL LOGIN
Route::get('/home/login/registrarse',[LoginController::class, 'registrarse'])->name('registrarse');
//FIN BOTONES DEL LOGIN

//BOTONES DEL HOME
Route::get('/home/login',[LoginController::class, 'index'])->name('login');
//FIN BOTONES HOME
