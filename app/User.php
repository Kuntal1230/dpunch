<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Order;
use App\Review;
use App\Userinfo;
use App\Userpoint;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','membership_id','email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userinfo()
    {
      return $this->hasOne(Userinfo::class);
    }
    public function userpoint()
    {
      return $this->hasMany(Userpoint::class);
    }

    public function review()
    {
      return $this->hasMany(Review::class);
    }
    public function order()
    {
      return $this->hasMany(Order::class);
    }
}
