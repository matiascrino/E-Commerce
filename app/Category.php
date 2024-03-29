<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
  use softDeletes;
  public $guarded = [];

  public function products(){
  return $this->hasMany('\App\Product', 'categorie_id');
  }
}
