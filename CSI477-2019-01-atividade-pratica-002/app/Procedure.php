<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
  public $timestamps = false;


  protected $fillable = ['id','user_id','name','price',];


public function Testprocedure() {
return $this->hasMany('App\Test');
}

}
