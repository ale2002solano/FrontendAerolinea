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
    $idVuelo = request()->query('idVuelo');
    $datos =request()->all();
    $cliente = $datos['cliente'];
    $asiento = $datos['asiento'];
    
    $boleto = [
        'cliente' => $cliente,
        'asiento' => $asiento,
    ];
    $jsonBoleto = json_encode($boleto);
    dd($jsonBoleto);
    $url = "http://localhost:8080/api/boleto/crear?idVuelo=$idVuelo";
        // Realizar la solicitud a Spring Boot
        $response = \Http::post($url, [
            'json' => $jsonBoleto, // Enviar datos como JSON al servicio Spring Boot
            'headers' => [
                'Content-Type' => 'application/json',
                // Puedes agregar otros encabezados según sea necesario
            ],
        ]);

        // Obtener la respuesta del servicio Spring Boot
        $boletoGet = $response->json();

        // Retornar la respuesta como JSON
        return response()->json(['boletoGet' => $boletoGet]);
    }
}
