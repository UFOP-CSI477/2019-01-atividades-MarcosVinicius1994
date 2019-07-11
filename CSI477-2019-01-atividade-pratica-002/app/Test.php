<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  public $timestamps = false;


  protected $fillable = ['id','user_id','procedure_id','date',];
}
