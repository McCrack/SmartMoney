<?php

namespace App\Containers\Page\UI\WEB\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Page\Actions\PreparePageAction;
use App\Containers\Page\Models\Page;
use App\Ship\Parents\Controllers\WebController;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{
    /**
     * Home Page
     */
    public function home()
    {
        $page = Page::whereSlug('home')->first();
        return $this->show($page);
    }

    /**
     * @param Page $page
     */
    public function show(Page $page)
    {
        $prepared = Apiato::call(PreparePageAction::class, [$page]);

        return view("page::layouts.{$prepared['template']}", $prepared);
    }
}
