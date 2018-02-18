<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Subcategory extends Model
{
  public function product()
  {
    return $this->hasMany(Product::class);
  }
}
