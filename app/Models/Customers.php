<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    
/**
     * Get the user that have these details.
     */

public function user()
{
    return $this->belongsTo(User::class);
}


/**
     * Get the products for the this customer.
     */
    public function products()
    {
        return $this->hasMany(Products::class);
    }


}
