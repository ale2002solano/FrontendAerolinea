<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use GuzzleHttp\Client;

class LoginController extends Controller
{
     //
     public function index(){
        return view('Login');//USAMOS EL COMPACT PARA PASAR LA VARIABLE A LA VISTA
    }

    public function registrarse(){
        return view('Registro');//USAMOS EL COMPACT PARA PASAR LA VARIABLE A LA VISTA
    }

    public function login(Request $request){
        $cliente = new \GuzzleHttp\Client([
            'base_uri' => 'http://127.0.0.1:8080/api/clientes/',
            'timeout'=>30.0,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]);
    
        $response = $cliente->post('login', [
            'json' => [
                'correo' => $request->input('email'),
                'contrasena' => $request->input('password')
            ]
        ]);
    
        $statusCode = $response->getStatusCode();
        $data = json_decode($response->getBody(), true);
    
        if ($statusCode == 200) {
            return $data;
        }
    }
    

}
