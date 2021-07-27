<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'description', 'event',
        'language', 'food', 'map', 'departure', 'duration',
        'type', 'price'
    ];

    protected $hidden = [
        //
    ];
}
