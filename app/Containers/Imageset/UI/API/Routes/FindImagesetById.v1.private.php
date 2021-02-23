<?php

/**
 * @apiGroup           Imageset
 * @apiName            findImagesetById
 *
 * @api                {GET} /v1/imageset/:id Endpoint title here..
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
$router->get('imageset/{id}', [
    'as' => 'api_imageset_find_imageset_by_id',
    'uses'  => 'Controller@findImagesetById',
    'middleware' => [
      'auth:api',
    ],
]);
