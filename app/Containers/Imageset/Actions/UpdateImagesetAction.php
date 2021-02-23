<?php

namespace App\Containers\Imageset\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateImagesetAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $imageset = Apiato::call('Imageset@UpdateImagesetTask', [$request->id, $data]);

        return $imageset;
    }
}
