<?php

namespace App\Containers\Imageset\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateImagesetAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $imageset = Apiato::call('Imageset@CreateImagesetTask', [$data]);

        return $imageset;
    }
}
