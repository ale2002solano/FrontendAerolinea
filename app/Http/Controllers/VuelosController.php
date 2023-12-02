<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use GuzzleHttp\Client;

class VuelosController extends Controller
{
    //
    public function MostrarVuelosPorRuta(){        

        $origen = request()->query('origen');
        $destino = request()->query('destino');
        $url = "http://localhost:8080/api/vuelo/buscarVuelosPorRuta?origen=$origen&destino=$destino";      
        $response = \Http::get($url);
        $vuelos = $response->json();

        return view('ListaVuelos', compact('vuelos'));
    }
}
