<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

session_start();

require '../vendor/autoload.php';


$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'misclientes',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
    
        ] 
    ],
    
]);

$container = $app->getContainer();

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {

    return $capsule;
   
};

// Register component on container
$container['view2'] = function ($container) {
    $view = new \Slim\Views\Twig('../resources/views', [
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new Slim\Views\TwigExtension($router, $uri));

    return $view;
};

$container['HomeController'] = function ($container) {
    return new \App\Controllers\HomeController($container);
};

require '../src/config/db.php';

require '../app/routes.php';



//Se crea el container
require '../src/servicios/utilidades.php';

//Se incluyen las rutas
require '../src/rutas/generales.php';
require '../src/rutas/clientes.php';