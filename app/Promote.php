<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Promote extends Model
{
  public function product(){

    return $this->belongsTo(Product::class);
  }
  public function scopestatus($query)
    {
      return $query->where('promote_status', 1);
    }
}
