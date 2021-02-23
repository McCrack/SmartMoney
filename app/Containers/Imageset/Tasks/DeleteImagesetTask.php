<?php

namespace App\Containers\Imageset\Tasks;

use App\Containers\Imageset\Data\Repositories\ImagesetRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteImagesetTask extends Task
{

    protected $repository;

    public function __construct(ImagesetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
