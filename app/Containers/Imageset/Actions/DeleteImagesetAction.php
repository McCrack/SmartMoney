<?php

namespace App\Containers\Imageset\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteImagesetAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Imageset@DeleteImagesetTask', [$request->id]);
    }
}
