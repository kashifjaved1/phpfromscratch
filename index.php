<?php 
    
    require 'vendor/autoload.php';

    require 'core/bootstrap.php';

    // Method # 1

    // $router = Router::load('routes.php');

    // $router->direct($uri);

    // Method # 2

    Router::load('routes.php') 
            -> direct(Request::uri(), Request::method());