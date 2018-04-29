<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
use App\Product;
use App\Category;
use App\Undersubcategory;

class Subcategory extends Model
{
  public function product()
  {
    return $this->hasMany(Product::class);
  }
  public function undersubcategory()
  {
    return $this->hasMany(Undersubcategory::class);
  }
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
  public function brand()
  {
    return $this->hasMany(Brand::class);
  }


}
