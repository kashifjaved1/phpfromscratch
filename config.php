<?php

    return [
        'database' => [
            'name' => 'mytodo',
            'user' => 'root',
            'password' => '',
            'connection' => 'mysql:host=localhost',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ]
        ]
    ];

?>