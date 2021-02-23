<?php

/**
 * @apiGroup           Imageset
 * @apiName            createImageset
 *
 * @api                {POST} /v1/imageset Endpoint title here..
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
$router->post('imageset', [
    'as' => 'api_imageset_create_imageset',
    'uses'  => 'Controller@createImageset',
    'middleware' => [
      'auth:api',
    ],
]);
