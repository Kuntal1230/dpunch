<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Product;

class Cartitem extends Model
{
  public function order()
  {
    return $this->belongsTo(Order::class);
  }
  public function product()
  {
    return $this->belongsTo(Product::class);
  }


}
