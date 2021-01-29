<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\categories ;

class Products extends Model
{
    use HasFactory;
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Get the category  that product belong .
     */
  /*  public function category()
    {
        return $this->belongsTo(Categories::class);
    }
*/
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}

