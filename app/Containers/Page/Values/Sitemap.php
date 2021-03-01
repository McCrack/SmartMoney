<?php

namespace App\Containers\Page\Values;

use App\Ship\Parents\Values\Value;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Collection;

class Sitemap extends Value
{

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'sitemaps';

    /** @var int|null */
    public $instanceKey = null;

    /** @var array */
    public $branch = [];

    /**
     * Create a new component instance.
     *
     * @param int|null $level
     */
    public function __construct(?int $level = null)
    {
        $this->instanceKey = rand(100, 999);
        $this->branch = Apiato::call('Page@sitemapTask', [$level]);
    }
}
