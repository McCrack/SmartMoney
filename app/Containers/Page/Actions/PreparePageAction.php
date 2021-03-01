<?php

namespace App\Containers\Page\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;

use App\Containers\Page\Models\Page;

class PreparePageAction extends Action
{
    public function run(Page $page)
    {
        return [
            'page' => $page,
            'template' => $page->template ?? 'default',
        ];
    }
}
