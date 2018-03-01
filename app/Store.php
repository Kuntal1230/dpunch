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
}
