<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/', function(Request $request, Response $response){
    
   return $this->view->render($response, 'home.php');
        
  
})->setName('inicio');


$app->get('/registro', function(Request $request, Response $response){
    
    return $this->view->render($response, 'registro.php');
         
   
 })->setName('registro');

