<?php

    class PagesController{

        public function home(){

            return view('index',);

        }

        public function contact(){

            return view('contact');

        }

        public function about(){

            $company = 'Laracast';

            return view('about', ['company' => $company]);

        }

    }