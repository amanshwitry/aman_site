<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Categories;
use App\Models\Customers;
use App\Models\Products;

class Categories extends Model
{
    use HasFactory;

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description','price','cat_id'
                           ,'customer_id'   ];



/**
     * Get the products for the this category.
     */
    public function products()
    {
        return $this->hasMany(Products::class);
    }

   


}

 