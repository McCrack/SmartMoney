<?php

namespace App\Containers\Page\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
/**
 * Class PageRepository
 */
class PageRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
    ];

    /**
     * @param int|null $level
     * @return Collection
     */
    public function getBranch(?int $level = null): Collection
    {
        return collect(
            DB::select(DB::raw("
                WITH RECURSIVE cte (id, level, name, slug, language) as (
                    SELECT
                        id, parent_id, name, slug, language
                    FROM pages
                    WHERE parent_id " . ($level ? '=' . $level : 'IS NULL') . "
                    UNION ALL 
                    SELECT 
                        p.id, p.parent_id AS level, p.name, p.slug, p.language 
                    FROM pages AS p 
                    JOIN cte on p.parent_id = cte.id
                    WHERE published > 0 
                ) SELECT * FROM cte")
            )
        );
    }

    /**
     * @param int $entry
     * @return Collection
     */
    public function getBreadCrumbs(int $entry = 1): Collection
    {
        return collect(
            DB::select(DB::raw("
                WITH RECURSIVE cte (id, parent_id, name, slug, language) as (
                    SELECT id, parent_id, name, slug, language
                    FROM pages
                    WHERE id = ?
                    UNION ALL 
                    SELECT 
                        p.id, p.parent_id, p.name, p.slug, p.language 
                    FROM pages AS p 
                    JOIN cte on p.id = cte.parent_id
                    WHERE published > 0 
                ) SELECT * FROM cte ORDER BY id ASC"),
                [$entry]
            )
        );
    }
}
