<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
use App\Category;

class Product extends Model
{
  
    public function brand()
    {
      return $this->belongsTo(Brand::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
      return $this->belongsTo(Subcategory::class);
    }

    public function undersubcategory()
    {
      return $this->belongsTo(Undersubcategory::class);
    }
}
