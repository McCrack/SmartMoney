<?php

namespace App\Containers\Imageset\Tasks;

use App\Containers\Imageset\Data\Repositories\ImagesetRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateImagesetTask extends Task
{

    protected $repository;

    public function __construct(ImagesetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
