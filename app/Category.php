<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
use App\Product;

class Category extends Model
{
    public function product()
    {
      return $this->hasMany(Product::class);
    }

    public function subcategory()
    {
      return $this->hasMany(Subcategory::class);
    }
    public function brand()
    {
      return $this->hasMany(Brand::class);
    }
}
