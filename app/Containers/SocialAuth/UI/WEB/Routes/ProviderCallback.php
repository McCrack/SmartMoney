<?php

// provider callback handler
/** @var Route $router */
$router->any('auth/{provider}/callback', [
    'as' => 'web_socialauth_callback',
    'uses' => 'Controller@handleCallbackAll',
]);

