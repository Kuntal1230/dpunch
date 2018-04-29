<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Brand;
use App\Category;
use App\Cartitem;
use App\Review;
use App\Promote;

class Product extends Model
{
  use SoftDeletes;

  protected $dates = ['deleted_at'];

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

    public function promote(){

      return $this->hasOne(Promote::class);
    }
    public function reviews()
    {
  	  return $this->hasMany(Review::class);
    }

    public function scopestatus($query)
      {
        return $query->where('status', 1);
      }
    public function cartitem()
      {
        return $this->hasMany(Cartitem::class);
      }
}
