<?php

/**
 * @apiGroup           Material
 * @apiName            deleteMaterial
 *
 * @api                {DELETE} /v1/material/:id Endpoint title here..
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
$router->delete('material/{id}', [
    'as' => 'api_material_delete_material',
    'uses'  => 'Controller@deleteMaterial',
    'middleware' => [
      'auth:api',
    ],
]);
