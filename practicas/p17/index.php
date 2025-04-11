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


    
     $app->run(); // ejecutar el servidor web Slim 4

?>