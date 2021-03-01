<?php


namespace App\Containers\Page\UI\WEB\Components;

use Illuminate\Support\Collection;
use Illuminate\View\View;
use Illuminate\View\Component;

use App\Containers\Page\Contracts\Sitemap;

class LevelMenu extends Component
{
    /** @var array */
    public $level = [];

    /**
     * Create a new component instance.
     *
     * @param int|null $level
     */
    public function __construct(?int $level = null)
    {
        $this->level = (app(Sitemap::class))
            ->branch
            ->where('level', $level)
            ->pluck('name', 'slug');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('page::components.levelMenu');
    }
}