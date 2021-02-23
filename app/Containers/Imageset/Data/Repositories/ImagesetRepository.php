<?php

namespace App\Containers\Imageset\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ImagesetRepository
 */
class ImagesetRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
