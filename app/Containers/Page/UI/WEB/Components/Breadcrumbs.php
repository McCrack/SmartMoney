<?php


namespace App\Containers\Page\UI\WEB\Components;

use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\View\View;
use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    /**
     * @var array
     */
    public $breadcrumbs = [];

    /**
     * Create a new component instance.
     *
     * @param int $entryPoint
     * @return void
     */
    public function __construct(int $entryPoint = 1)
    {
        $this->breadcrumbs = Apiato::call('Page@breadcrumbsTask', [$entryPoint])
            ->pluck('name', 'slug');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('page::components.breadcrumbs');
    }
}