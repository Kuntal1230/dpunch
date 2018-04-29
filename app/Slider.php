<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $fillable = [
      'slider_id', 'slidertext', 'sliderimg','slidelink',
  ];
}
