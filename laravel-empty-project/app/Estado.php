<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{


//Lista dos campos que podem ser gravados com o mass assigment (dados em massa)


protected $fillable = ['nome', 'sigla'];


//Lista de campos protegidos -  não podem ser atualizados diretamente

//protected $guarded = ['senha'];
public function cidades() {
    return $this->hasMany('App\Cidade');
  }

}
