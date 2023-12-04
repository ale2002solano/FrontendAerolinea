<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ClienteController;
use GuzzleHttp\Exception\GuzzleException;

class LoginController extends Controller
{
     //
     public function index(){
        return view('Login');//USAMOS EL COMPACT PARA PASAR LA VARIABLE A LA VISTA
    }

    public function registrarse(){
        return view('Registro');//USAMOS EL COMPACT PARA PASAR LA VARIABLE A LA VISTA
    }


    public function obtenerOrigenes()
{
    try {
        $cliente = new \GuzzleHttp\Client([
            'base_uri' => 'http://127.0.0.1:8080/api/ruta/obtenerOrigenes',
            'timeout'=>10.0,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]);
        
        $response = $cliente->get('obtenerOrigenes');

        // Verificar si la solicitud fue exitosa (código de estado 200)
        if ($response->getStatusCode() === 200) {
            // Obtener los datos de la respuesta en formato JSON
            $origenes = json_decode($response->getBody(), true);
            return $origenes;
        } else {
            $origenes = [];
        }
    } catch (RequestException $e) {
        // Manejar errores de solicitud (por ejemplo, tiempo de espera agotado, URL incorrecta, etc.)
        $origenes = [];
    } catch (\Exception $e) {
        // Manejar otras excepciones
        $origenes = [];
    }
}

public function obtenerDestinosPorOrigen(Request $request){
    $origen = $request->input('origen'); // Obtener el origen desde la solicitud
    dd($origen);
    try {
        $cliente = new \GuzzleHttp\Client([
            'base_uri' => 'http://localhost:8080/api/',
            'timeout'=>10.0,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]);

        // Hacer la solicitud GET con el origen como parámetro en la URL
        $response = $cliente->get("ruta/obtenerDestinos?origen=$origen");

        if ($response->getStatusCode() === 200) {
            $destinos = json_decode($response->getBody(), true);
            return dd($destinos); // Devolver los destinos obtenidos
        } else {
            return []; // En caso de error, devolver un array vacío o manejar el error según sea necesario
        }
    } catch (\Exception $e) {
        return []; // Manejar excepciones si ocurren
    }
}

public function conejo(){
    $origen = request()->query('origen');
    $url = "http://127.0.0.1:8080/api/ruta/obtenerDestinos?origen=$origen";   
    $response = \Http::get($url);
    $destinos = $response->json();
    return response()->json(['destinos' => $destinos]);
}



    public function login(Request $request){
        $correo=$request->input('email');
        $contrasena=$request->input('password');

        if(!$correo || !$contrasena){
            return response()->json(['message' => 'Es necesario que ingreses la contraseña y el correo'], 400);
        }

        try{
            $cliente = new \GuzzleHttp\Client([
                'base_uri' => 'http://127.0.0.1:8080/api/clientes/',
                'timeout'=>10.0,
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]);

            $response = $cliente->post('login', [
                'json' => [
                    'correo' => $correo,
                    'contrasena' => $contrasena
                ]
            ]);

            $statusCode = $response->getStatusCode();
            $data = json_decode($response->getBody(), true);
            
            if ($statusCode == 200 && isset($data['idCliente']) && !empty($data['idCliente'])) {
                $nombreCompleto= $data['nombre'].' '.$data['apellido'];//guardaremos temporalmente el nombre y apellido del cliente en una variable
                $origenes = $this->obtenerOrigenes();
                session(['nombre_completo' => $nombreCompleto,'origenes' => $origenes,'idCliente'=>$idCliente]);
                
                return view('cliente', ['nombre_completo' => $nombreCompleto, 'origenes' => $origenes,'idCliente'=>$idCliente]);
                
            } else{
                return 'No existe este perfil';
            }
        } catch (GuzzleException $e) {
            return response()->json(['message' => 'Error al conectar con el servidor'], 500);
        }
        }


        
    
        
        
    
    }

