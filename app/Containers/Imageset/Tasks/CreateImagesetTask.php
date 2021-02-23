<?php

namespace App\Containers\Imageset\Tasks;

use App\Containers\Imageset\Data\Repositories\ImagesetRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateImagesetTask extends Task
{

    protected $repository;

    public function __construct(ImagesetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
