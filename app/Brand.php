<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Category;
use App\Subcategory;
use App\Undersubcategory;

class Brand extends Model
{
  protected $fillable = [
      'category_id', 'subcategory_id', 'name',
  ];

  public function product()
  {
    return $this->hasMany(Product::class);
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
