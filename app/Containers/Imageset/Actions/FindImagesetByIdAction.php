<?php

namespace App\Containers\Imageset\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindImagesetByIdAction extends Action
{
    public function run(Request $request)
    {
        $imageset = Apiato::call('Imageset@FindImagesetByIdTask', [$request->id]);

        return $imageset;
    }
}
