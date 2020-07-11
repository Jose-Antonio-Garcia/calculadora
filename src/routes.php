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
    $app->post('/pitagoras','pitagoras');
    $app->get('/binomio','binomio');
    $app->get('/areatrapecio','areatrapecio');
    $app->get('/cuadrado','cuadrado');
    $app->get('/fuerza','fuerza');
    $app->get('/PuntoMedio','PuntoMedio');
    $app->post('/conversor','conversor');
    $app->get('/radio','radio');
    $app->get('/gravedad','gravedad');
    $app->get('/promedio','promedio');
    $app->get('/mruv','mruv');
    $app->get('/alumnos','gettodoslosalumnos');
    $app->get('/alumno','getalumno');
    $app->post('/alumno','setalumno');
    

});
