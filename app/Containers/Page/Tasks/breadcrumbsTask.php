<?php

namespace App\Containers\Page\Tasks;

use App\Containers\Page\Data\Repositories\PageRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Collection;

class breadcrumbsTask extends Task
{

    protected $repository;

    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $entryPoint
     * @return Collection
     */
    public function run(int $entryPoint): Collection
    {
        return $this->repository->getBreadCrumbs($entryPoint);
    }
}
