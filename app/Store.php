<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Seller;

class Store extends Model
{
    public function seller()
    {
      return $this->belongsTo(Seller::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seller_id',
    ];

}
