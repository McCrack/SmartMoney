<?php

namespace App\Containers\Imageset\Models;

use App\Ship\Parents\Models\Model;


class Imageset extends Model
{
    protected $fillable = [
      'name',
      'language',
      'category',
      'content',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [
      'content' => 'array'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'imagesets';
}
