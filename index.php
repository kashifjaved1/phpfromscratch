<?php 
    
    require 'core/bootstrap.php';

    // Method # 1

    // $router = Router::load('routes.php');

    // $router->direct($uri);

    // Method # 2

    require Route::load('routes.php') 
            -> direct(Request::uri());