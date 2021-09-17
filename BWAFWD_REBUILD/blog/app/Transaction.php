<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'travel_packages_id', 'users_id', 'additional_visa',
        'transaction_total', 'transaction_status'
    ];

    protected $hidden = [];

    //relasi dengan tabel travel_packages
    public function travel_package()
    {
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id', 'id');
    }

    //relasi dengan tabel transaction_details
    public function details()
    {
        return $this->hasMany(TransactionDetails::class, 'transaction_id', 'id');
    }

    //relasi dengan tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
