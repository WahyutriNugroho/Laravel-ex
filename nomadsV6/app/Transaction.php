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

    //membuat relasi table transaction_details
    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

    //membuat relasi table travel_packages
    public function travel_package()
    {
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id', 'id');
    }

    //membuat relasi table user
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
