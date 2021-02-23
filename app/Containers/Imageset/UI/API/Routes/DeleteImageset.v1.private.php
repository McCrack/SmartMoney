<?php

/**
 * @apiGroup           Imageset
 * @apiName            deleteImageset
 *
 * @api                {DELETE} /v1/imageset/:id Endpoint title here..
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
$router->delete('imageset/{id}', [
    'as' => 'api_imageset_delete_imageset',
    'uses'  => 'Controller@deleteImageset',
    'middleware' => [
      'auth:api',
    ],
]);
