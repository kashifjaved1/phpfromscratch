<?php

    // $router->define([
    //     'phpfromscratch' => 'controllers/index.php',
    //     'phpfromscratch/about' => 'controllers/about.php',
    //     'phpfromscratch/contact' => 'controllers/contact.php',
    //     'phpfromscratch/about/culture' => 'controllers/about-culture.php'
    // ]);

    $router->get('phpfromscratch', 'controllers/index.php');
    $router->get('phpfromscratch/about', 'controllers/about.php');
    $router->get('phpfromscratch/contact', 'controllers/contact.php');
    $router->get('phpfromscratch/about/culture', 'controllers/about-culture.php');
    $router->post('phpfromscratch/names', 'controllers/names.php');