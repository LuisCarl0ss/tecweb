<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;     

    require 'vendor/autoload.php';

    $app = AppFactory::create();
    $app->setBasePath("/tecweb/practicas/p17"); 


    $app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("hola mundo Slim v4");
        return $response;
    });

    $app->get('/hola/{nombre}', function (Request $request, Response $response, $args) {
        $nombre = $args['nombre'];
        $response->getBody()->write("Hola " . $nombre);
        return $response;
    });

    $app->post('/pruebapost', function (Request $request, Response $response, $args) {
        $reqPost = $request->getParsedBody(); // obtener el cuerpo de la petición POST
        $val1 = $reqPost["valor1"]; // obtener el valor del campo valor1
        $val2 = $reqPost["valor2"]; // obtener el valor del campo valor2
        
        $response->getBody()->write("valores:" . $val1 . " " . $val2); // escribir en la respuesta
        return $response; // devolver la respuesta
    });

    // $app->get('/testjson', function (Request $request, Response $response, $args) {
    //     $reqPost = $request->getParsedBody(); // obtener el cuerpo de la petición POST
    //     $data[0]["nombre"] = "Luis Carlos"; // crear un array de datos
    //     $data[0]["apellido"] = "Torralba Cerezo"; // crear un array de datos
    //     $data[1]["nombre"] = "Chanchito"; // crear un array de datos
    //     $data[1]["apellido"] = "Feliz"; // crear un array de datos
    //     $response->getBody()->write(json_encode($data, JSON_PRETTY_PRINT)); // convertir el array a JSON y escribir en la respuesta
    //     return $response; // devolver la respuesta
    // });


    $app->post('/testjson', function (Request $request, Response $response, $args) {
        $reqPost = $request->getParsedBody(); // obtener el cuerpo de la petición POST
        $data[0]["nombre"] = $reqPost ["nombre1"]; // crear un array de datos
        $data[0]["apellido"] = $reqPost ["apellidos1"]; // crear un array de datos
        $data[1]["nombre"] = $reqPost ["nombre2"]; // crear un array de datos
        $data[1]["apellido"] = $reqPost ["apellidos2"]; // crear un array de datos
        $response->getBody()->write(json_encode($data, JSON_PRETTY_PRINT)); // convertir el array a JSON y escribir en la respuesta
        return $response; // devolver la respuesta
    });
    
     $app->run(); // ejecutar el servidor web Slim 4

?>