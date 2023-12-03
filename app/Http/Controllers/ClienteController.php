<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;


class ClienteController extends Controller
{
    // 
    

    // public function obtenerOrigenes()
    // {
    //     try {
    //         $cliente = new \GuzzleHttp\Client([
    //             'base_uri' => 'http://127.0.0.1:8080/api/ruta/obtenerOrigenes',
    //             'timeout'=>10.0,
    //             'headers' => [
    //                 'Accept' => 'application/json',
    //                 'Content-Type' => 'application/json'
    //             ]
    //         ]);
            
    //         $response = $cliente->get('obtenerOrigenes');
    
    //         // Verificar si la solicitud fue exitosa (código de estado 200)
    //         if ($response->getStatusCode() === 200) {
    //             // Obtener los datos de la respuesta en formato JSON
    //             $origenes = json_decode($response->getBody(), true);
    //             return $origenes;
    //         } else {
    //             $origenes = [];
    //         }
    //     } catch (RequestException $e) {
    //         // Manejar errores de solicitud (por ejemplo, tiempo de espera agotado, URL incorrecta, etc.)
    //         $origenes = [];
    //     } catch (\Exception $e) {
    //         // Manejar otras excepciones
    //         $origenes = [];
    //     }
    // }


}
