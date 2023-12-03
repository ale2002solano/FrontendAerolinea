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
        // dd($vuelos);
        $urlRegreso = "http://localhost:8080/api/vuelo/buscarVuelosPorRuta?origen=$destino&destino=$origen";      
        $responseRegreso = \Http::get($urlRegreso);
        $vuelosRegreso = $responseRegreso->json();
        return view('ListaVuelos', compact('vuelos', 'vuelosRegreso'));

    }

    public function MostrarEscalasVuelo(){
        $idVuelo = request()->query('idVuelo');
        $url = "http://localhost:8080/api/escala/obtener/porVuelo?idVuelo=$idVuelo";      
        $response = \Http::get($url);
        $escalas = $response->json();
        return response()->json(['escalas' => $escalas]);
    }

    public function ObtenerAsientosVuelo($idVuelo){
        $url = "http://localhost:8080/api/vuelo/numeroAsientos/$idVuelo";      
        $response = \Http::get($url);
        $numeroVuelos = $response->json();
        return view('Avion', compact('numeroVuelos'));
    }
}
