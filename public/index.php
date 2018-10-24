<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../src/config/db.php';

$app = new \Slim\App;



//Se crea el container
require '../src/servicios/utilidades.php';

//Se incluyen las rutas
require '../src/rutas/generales.php';
require '../src/rutas/clientes.php';




$app->run();

