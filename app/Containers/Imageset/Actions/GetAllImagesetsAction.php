<?php

namespace App\Containers\Imageset\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllImagesetsAction extends Action
{
    public function run(Request $request)
    {
        $imagesets = Apiato::call('Imageset@GetAllImagesetsTask', [], ['addRequestCriteria']);

        return $imagesets;
    }
}
