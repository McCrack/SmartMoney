<?php

namespace App\Containers\Page\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\Material\Models\Material;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Page extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'language',
        'type',
        'title',
        'description',
        'preview',
        'template',
        'specifics',
        'published',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'pages';

    /**
     * The materials that belong to the page.
     * @return BelongsToMany
     */
    public function materials(): BelongsToMany
    {
      return $this
        ->belongsToMany(Material::class, 'page_material')
        ->as('bindingMaterials');
    }

  /**
   * The imagesets that belong to the page.
   * @return BelongsToMany
   */
  public function imagesets(): BelongsToMany
  {
    return $this
      ->belongsToMany(Material::class, 'page_imageset')
      ->as('bindingImagesets');
  }
}
