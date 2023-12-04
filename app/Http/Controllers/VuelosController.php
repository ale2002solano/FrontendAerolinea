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
        $idCliente = request()->query('user');
        $url = "http://localhost:8080/api/asiento/vueloAsientos/$idVuelo";
        $url2 = "http://localhost:8080/api/vuelo/obtener?idVuelo=$idVuelo";
        $url3 = "http://localhost:8080/api/clientes/obtener/$idCliente";
        $response2 =\Http::get($url2);
        $response = \Http::get($url);
        $response3 = \Http::get($url3);
        $asientos = $response->json();
        $vuelo = $response2->json();
        $cliente = $response3->json();
        // dd($asientos);
        return view('Avion', compact('asientos', 'vuelo' , 'cliente'));
    }
}
