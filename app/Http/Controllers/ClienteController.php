<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;


class ClienteController extends Controller{

    public function registrarCliente(Request $request)
    {
        // Validar los datos del formulario (igual que antes)

        // Crear un array con los datos del cliente
        $data = [
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'contrasena' => $request->input('password'),
        ];

        // Realizar la solicitud POST a tu backend en Spring Boot usando Guzzle
        $client = new Client([
            'base_uri' => 'http://localhost:8080/api/',
            'timeout'  => 2.0,
        ]);

        try {
            $response = $client->post('clientes/guardar', [
                'json' => $data,
            ]);

            // Obtener la respuesta del backend
            $responseData = json_decode($response->getBody(), true);

            // Puedes hacer más aquí según la respuesta del backend

            return redirect()->route('home')->with('success', 'Cliente registrado correctamente');
        } catch (\Exception $e) {
            // Manejar errores de conexión o del backend
            return redirect()->back()->with('error', 'Error al registrar el cliente: ' . $e->getMessage());
        }
    }
}

