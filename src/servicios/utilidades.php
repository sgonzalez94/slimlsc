<?php


// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\PhpRenderer('../src/vistas');

    // Instantiate and add Slim specific extension
//$basePath = rtrim(str_ireplace('index.php', '', $container->get('request')->getUri()->getBasePath()), '/');
    //$view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $basePath));

    return $view;
};