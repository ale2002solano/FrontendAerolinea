<?php

use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
Route::get('/login', function () {
    return view('Login');
});

Route::get('/home', function () {
    return view('Home');
});
=======
Route::get('/avion', function () {
    return view('Avion');
});

Route::get('/login', [LoginController::class,'index'])->name('usuario.login');
>>>>>>> 546678025bd6ac8bfbe593c0b3533d21f8f99762
