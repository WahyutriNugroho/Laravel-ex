<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// php artisan make:model TravelPackage
class TravelPackages extends Model
{
    //mengaktifkan soft delete
    use SoftDeletes;
    //
    protected $fillable = [
        'title', 'slug', 'locations', 'about', 'featured_event',
        'language', 'foods', 'departure_date', 'duration', 'type', 'price'
    ];

    protected $hidden = [];

    //relasi menginformasikan bahwa travel_packages mempunyai banyak gallery
    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
