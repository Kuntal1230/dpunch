<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Userpoint extends Model
{
  protected $fillable = [
      'user_id','point_source','point','status',
  ];
    public function user()
    {
      return $this->belongsTo(User::class);
    }

}
