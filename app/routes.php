<?php


$app->get('/login', 'HomeController:index');

$app->get('/home', function($request,$response){


    return $this->view2->render($response, 'home.twig');

});



