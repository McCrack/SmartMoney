<?php

namespace App\Containers\Imageset\Tasks;

use App\Containers\Imageset\Data\Repositories\ImagesetRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllImagesetsTask extends Task
{

    protected $repository;

    public function __construct(ImagesetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
