<?php

/** @var Route $router */
$router->get('materials/{id}', [
    'as' => 'web_material_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
