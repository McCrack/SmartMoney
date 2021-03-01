<?php

/** @var Route $router */
$router->get('/', [
    'as'   => 'get_home_page',
    'uses' => 'Controller@home',
]);
