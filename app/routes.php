<?php

    $router->get('phpfromscratch', 'PagesController@home');
    $router->get('phpfromscratch/about', 'PagesController@about');
    $router->get('phpfromscratch/contact', 'PagesController@contact');
    $router->get('phpfromscratch/users', 'UsersController@index');
    $router->post('phpfromscratch/users', 'UsersController@store');