<?php

/**
 * @apiGroup           Imageset
 * @apiName            getAllImagesets
 *
 * @api                {GET} /v1/imageset Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('imageset', [
    'as' => 'api_imageset_get_all_imagesets',
    'uses'  => 'Controller@getAllImagesets',
    'middleware' => [
      'auth:api',
    ],
]);
