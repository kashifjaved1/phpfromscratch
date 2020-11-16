<?php

    namespace App\Core;

    class Router{

        protected $routes = [

                'GET' => [],
                'POST' => []

        ];

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

        public function get($uri, $controller){

            $this->routes['GET'][$uri] = $controller;

        }

        public function post($uri, $controller){

            $this->routes['POST'][$uri] = $controller;

        }

        public function direct($uri, $requestType){

            if(array_key_exists($uri, $this->routes[$requestType])){
                
                return $this->callAction(

                    // ... convert array into function parameters
                    ...explode('@', $this->routes[$requestType][$uri])

                );
                
            }
            else{

                throw new Exception('Oops, URL not Exist.');

            }

        }

        protected function callAction($controller, $action){

            $controller = "App\\Controllers\\$controller";

            $controller = new $controller;

            if(method_exists($controller, $action)){

                return (new $controller) -> $action();
                
            }
            else{
                
                throw new Exception(

                    "$controller does not respond to $action action."

                ); 

            }

        }

    }