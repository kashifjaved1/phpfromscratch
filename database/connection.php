<?php

    class Connection{
        public static function make(){
            try{
                return new PDO('mysql:host=localhost; dbname=mytodo', 'root', '');
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }
        // public function make(){
        //     
        // }
    }

    // $connection = new Connection();
    // $connection->make();

    // for static function, you can use scope_resolution (::) operator to call function.
