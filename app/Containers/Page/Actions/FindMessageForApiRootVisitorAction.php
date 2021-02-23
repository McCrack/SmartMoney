<?php

namespace App\Containers\Page\Actions;

use App\Ship\Parents\Actions\Action;

/**
 * Class WelcomeApiRootVisitorAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class FindMessageForApiRootVisitorAction extends Action
{

    /**
     * @return  array
     */
    public function run()
    {
        return [trans('localization::messages.welcome')];
    }
}
