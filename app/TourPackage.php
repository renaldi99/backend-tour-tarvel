<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'short_content', 'description', 'event',
        'language', 'food', 'map', 'departure', 'duration',
        'type', 'price'
    ];

    protected $hidden = [
        //
    ];

    public function images(){
        return $this->hasMany(Image::class, 'tour_packages_id', 'id');
    }
}
