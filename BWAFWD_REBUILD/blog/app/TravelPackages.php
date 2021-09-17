<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TravelPackages extends Model
{
    use SoftDeletes;
    // protected $table = 'travel_packages';
    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event',
        'language', 'foods', 'departure_date', 'duration', 'type', 'price'
    ];

    protected $hidden = [];


    //relasi dengan tabel travel_packages
    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
