<?php

/** @var Route $router */
$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@sayWelcome',
]);
