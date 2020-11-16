<?php

    App::bind('config', require 'config.php');

    $app['database'] =  new QueryBuilder(
        Connection::make(App::get('config')['database'])
    );

?>