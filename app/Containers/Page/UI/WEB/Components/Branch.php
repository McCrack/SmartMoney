<?php


namespace App\Containers\Page\UI\WEB\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

use App\Containers\Page\Contracts\Sitemap;
use Illuminate\Support\Collection;

class Branch extends Component
{
    /** @var array */
    public $branch = [];

    /** @var int */
    public $entryPoint = 0;

    /**
     * Create a new component instance.
     *
     * @param int $entryPoint
     */
    public function __construct(int $entryPoint = 1)
    {
        $this->entryPoint = $entryPoint;
        $sitemap = (app(Sitemap::class))->branch;
        $this->buildBranch($sitemap, $entryPoint);
    }

    /**
     * @param Collection $sitemap
     * @param int $entryPoint
     */
    private function buildBranch(Collection &$sitemap, int $entryPoint): void
    {
        $level = $sitemap->where('level', $entryPoint);
        foreach ($level as &$item) {
            $this->branch[$item->level][$item->slug] = $item;
            $this->buildBranch($sitemap, $item->id);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('page::components.branch');
    }
}