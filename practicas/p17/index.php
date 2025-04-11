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

    
    
     $app->run(); // ejecutar el servidor web Slim 4

?>