<?php

class Router{

    protected $routes = [];

    public static function load($file){

        // Method # 1

        //$router = new Router;

        // Method # 2

        //$router = new self;

        // Method # 3

        $router = new static;

        require $file;

        return $router;

    }

    public function define($routes){

        $this->routes = $routes;

    }

    public function direct($uri){

        if(array_key_exists($uri, $this->routes)){
            
            return $this->routes[$uri];
            
        }
        else{

            throw new Exception('Oops, URL not Exist.');

        }

    }

}