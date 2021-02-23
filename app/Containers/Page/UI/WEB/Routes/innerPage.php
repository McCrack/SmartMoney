<?php

/** @var Route $router */
$router->get('/{slug}', [
  'as'   => 'get_main_home_page',
  'uses' => 'Controller@sayWelcome',
]);
