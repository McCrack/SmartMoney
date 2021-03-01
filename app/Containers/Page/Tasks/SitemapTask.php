<?php

namespace App\Containers\Page\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Containers\Page\Data\Repositories\PageRepository;
use Illuminate\Support\Collection;

class SitemapTask extends Task
{
    protected $repository;
    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int|null $level
     * @return Collection
     */
    public function run(?int $level = null): Collection
    {
        return $this->repository->getBranch($level);
    }
}
