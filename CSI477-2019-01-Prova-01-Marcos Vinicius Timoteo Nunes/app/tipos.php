<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{

  protected $fillable = ['id','nome'];


  public function tipostransa() {
 return $this->hasMany('App\trans');
}
}
