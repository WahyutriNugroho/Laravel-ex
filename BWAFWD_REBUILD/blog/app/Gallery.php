<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Gallery extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'travel_packages_id', 'image'
    ];

    protected $hidden = [];
    //relasi dengan tabel travel_packages dengan foreign key travel_packages_id
    public function travel_package()
    {
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id', 'id');
    }
}
