<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Subcategory;

class Undersubcategory extends Model
{
  public function product()
  {
    return $this->hasMany(Product::class);
  }
  public function subcategory()
  {
    return $this->belongsTo(Subcategory::class);
  }
  public function brand()
  {
    return $this->hasMany(Brand::class);
  }
}
