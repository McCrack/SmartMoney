<?php

/** @var Route $router */
$router->get('/{page:slug}', [
    'as'   => 'inner_page',
    'uses' => 'Controller@show',
    'domain' => (function () {
        $subdomain = explode('.', Request::getHost())[0];
        if (in_array($subdomain, array_keys(Config::get('app.locales')))) {
            App::setLocale($subdomain);
            return $subdomain . '.' . parse_url(Config::get('app.url'))['host'];
        } else {
            return parse_url(Config::get('app.url'))['host'];
        }
    })(),
    'prefix' => (function() {
        $prefix = Request::segment(1, Config::get('app.language'));
        $locale = Config::get("app.locales." . App::getLocale());
        if (in_array($prefix, $locale['languages'])) {
            $language = $prefix;
        } else {
            $language = $locale['default_language'];
            $prefix = null;
        }
        Config::set('app.language', $language);
        return $prefix;
    })(),
]);
