<?php

    class Connection{

        public static function make($config){

            try{
                return new PDO(
                    $config['connection'] . '; dbname=' . $config['name'],
                    $config['user'],
                    $config['password'],
                    $config['options']
                );

                //var_dump($config);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }

    }
