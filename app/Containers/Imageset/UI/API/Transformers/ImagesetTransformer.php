<?php

namespace App\Containers\Imageset\UI\API\Transformers;

use App\Containers\Imageset\Models\Imageset;
use App\Ship\Parents\Transformers\Transformer;

class ImagesetTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Imageset $entity
     *
     * @return array
     */
    public function transform(Imageset $entity)
    {
        $response = [
            'object' => 'Imageset',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
