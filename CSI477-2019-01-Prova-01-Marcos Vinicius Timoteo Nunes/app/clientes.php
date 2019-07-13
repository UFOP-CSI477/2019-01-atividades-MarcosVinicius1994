<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{

  protected $fillable = [ 'id', 'nome' ];


  public function ClienTrans() {
   return $this->hasMany('App\trans');
 }



//
//  public function select_cliente(){
//  $options = "<option value='vazio'> Selecione o Cliente</option>";
//
// $clientes = clientes::all();
// foreach ($clientes as $cliente){
// $options .= "<option value='{$cliente->id}'>$cliente->nome</option>";
// }
// return $options;
//
//  }

}
