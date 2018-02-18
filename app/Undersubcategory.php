<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Undersubcategory extends Model
{
  public function product()
  {
    return $this->hasMany(Product::class);
  }
}
