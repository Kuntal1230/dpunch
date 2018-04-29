<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Userinfo extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id','address','region','city','country','postcode',
  ];

  protected $casts = [
    'address' => 'array',
];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
