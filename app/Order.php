<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Cartitem;

class Order extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function userinfo()
  {
    return $this->belongsTo(Userinfo::class);
  }
  public function cartitem()
  {
    return $this->hasMany(Cartitem::class);
  }
  public function scopestatus($query)
    {
      return $query->where('status', 1);
    }
}
