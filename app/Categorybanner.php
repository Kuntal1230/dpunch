<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorybanner extends Model
{
  protected $fillable = [
      'id', 'category','bannerimg','bannerlink',
  ];
}
