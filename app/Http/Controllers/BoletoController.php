<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use GuzzleHttp\Client;

class BoletoController extends Controller
{
    public function CargarAsientos(){

        $idVuelo = request()->query('idVuelo');
        $url = "http://localhost:8080/api/asiento/obtener/porVuelo?idVuelo=$idVuelo";      
        $response = \Http::get($url);
        $asientos = $response->json();

        return response()->json(['asientos' => $asientos]);
    }

    public function ReservarAsiento($idAsiento, $idVuelo){
        $url = "http://localhost:8080/api/asiento/seleccionarAsiento/$idAsiento/$idVuelo";      
        $response = \Http::put($url);
        $asiento = $response->json();
        return response()->json(['asiento' => $asiento]);

    }

    public function CrearBoleto(){
    $idAsiento = $request->input('idAsiento');
    $url = "http://localhost:8080/api/asiento/seleccionarAsiento/$idAsiento/$idVuelo";
    $response = \Http::post($url);
    $asiento = $response->json();
    return response()->json(['asiento' => $asiento]);
    }
}
