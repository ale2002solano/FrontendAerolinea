<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     //
     public function index(){
        return view('Login');//USAMOS EL COMPACT PARA PASAR LA VARIABLE A LA VISTA
    }
}
