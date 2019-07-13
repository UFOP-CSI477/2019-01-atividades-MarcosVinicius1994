<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use App\clientes;
class Trans extends Model
{
  public $timestamps = false;


protected $fillable = [ 'tipo_id','cliente_id','data', 'valor','credito' ];


  public function umtipoClien() {
 return $this->belongTo('App\clientes');
}

public function umtipoTrasn() {
return $this->belongTo('App\tipos');
}


}
