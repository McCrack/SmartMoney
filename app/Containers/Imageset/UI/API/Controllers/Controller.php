<?php

namespace App\Containers\Imageset\UI\API\Controllers;

use App\Containers\Imageset\UI\API\Requests\CreateImagesetRequest;
use App\Containers\Imageset\UI\API\Requests\DeleteImagesetRequest;
use App\Containers\Imageset\UI\API\Requests\GetAllImagesetsRequest;
use App\Containers\Imageset\UI\API\Requests\FindImagesetByIdRequest;
use App\Containers\Imageset\UI\API\Requests\UpdateImagesetRequest;
use App\Containers\Imageset\UI\API\Transformers\ImagesetTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Imageset\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateImagesetRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createImageset(CreateImagesetRequest $request)
    {
        $imageset = Apiato::call('Imageset@CreateImagesetAction', [$request]);

        return $this->created($this->transform($imageset, ImagesetTransformer::class));
    }

    /**
     * @param FindImagesetByIdRequest $request
     * @return array
     */
    public function findImagesetById(FindImagesetByIdRequest $request)
    {
        $imageset = Apiato::call('Imageset@FindImagesetByIdAction', [$request]);

        return $this->transform($imageset, ImagesetTransformer::class);
    }

    /**
     * @param GetAllImagesetsRequest $request
     * @return array
     */
    public function getAllImagesets(GetAllImagesetsRequest $request)
    {
        $imagesets = Apiato::call('Imageset@GetAllImagesetsAction', [$request]);

        return $this->transform($imagesets, ImagesetTransformer::class);
    }

    /**
     * @param UpdateImagesetRequest $request
     * @return array
     */
    public function updateImageset(UpdateImagesetRequest $request)
    {
        $imageset = Apiato::call('Imageset@UpdateImagesetAction', [$request]);

        return $this->transform($imageset, ImagesetTransformer::class);
    }

    /**
     * @param DeleteImagesetRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteImageset(DeleteImagesetRequest $request)
    {
        Apiato::call('Imageset@DeleteImagesetAction', [$request]);

        return $this->noContent();
    }
}
