<?php

namespace App\Containers\Page\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Controllers\ApiController;

/**
 * Class Controller.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class Controller extends ApiController
{

    /**
     * @return  \Illuminate\Http\JsonResponse
     */
    public function apiRoot()
    {
        $message = Apiato::call('Page@FindMessageForApiRootVisitorAction');

        return response()->json($message);
    }

    /**
     * @return  \Illuminate\Http\JsonResponse
     */
    public function v1ApiLandingPage()
    {
        $message = Apiato::call('Page@FindMessageForApiV1VisitorAction');

        return response()->json($message);
    }

}
