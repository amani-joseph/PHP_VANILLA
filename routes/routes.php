<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



//BASIC APPROACH
//if($uri === '/'){
//
//    require ('controllers/index.php');
//}
//else if ($uri === '/about'){
//
//    require 'controllers/about.php';
//}
//else if ($uri === '/contact'){
//
//    require 'controllers/contact.php';
//}

$routes = [
    '/'=>'controllers/index.php',
    '/about'=>'controllers/about.php',
    '/contact'=>'controllers/contact.php',
];

function abort (){
    http_response_code(404);
    require_once ('controllers/404.php');
    die();
}
function routerToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }
    else{
        abort();
    }
}

routerToController($uri,$routes);