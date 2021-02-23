<?php

// provider login redirect (WEB)
/** @var Route $router */
$router->get('auth/{provider}', [
    'as' => 'web_socialauth_redirect',
    'uses' => 'Controller@redirectAll',
]);
