<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
///
/// http://localhost/apirest/public/api/v1/employee
///

// API group
$app->group('/api', function () use ($app) {
   
    //REGISTROUSUARIOS
    $app->post('/calculadora','calculadora');
    $app->get('/calculadora','distancia');
    $app->put('/calculadora','PentagonoRegularArea');
    $app->get('/areacilindro','areacilindro');
    $app->get('/trapecio','trapecio');
    $app->get('/pitagoras','pitagoras');
});
