<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Procedure;
use App\Test;
class PaginasController extends Controller
{
    public function index() {
      return view('principal');
    }



public function MostrarPad(){

  $procedure = Procedure::all();

  return view('procedures.MostrarAoUsuario')
       ->with('procedures',$procedure);
}



public function Exames_Proce(){
$procedure = Procedure::all();
  $test = Test::all();

  return view('paciente.index')
      ->with('procedures',$procedure)
      ->with('tests',$test);
}

}
