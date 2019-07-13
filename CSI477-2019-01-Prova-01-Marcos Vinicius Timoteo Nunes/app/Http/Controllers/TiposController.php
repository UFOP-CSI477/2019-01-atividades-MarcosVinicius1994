<?php

namespace App\Http\Controllers;

use App\tipos;
use Illuminate\Http\Request;
use\ Illuminate\Support\Facades\Auth;

class TiposController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $tipos = tipos::orderBy('nome')->get();
    return view('tipos.index')
    ->with('tipos',$tipos);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {


    if ( Auth::check() ) {
      return view('tipos.criacao');
    }
    else {
      return redirect()->route('home');
    }

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $tipos)
  {

    tipos::create($tipos->all());

    // Mensagem de sucesso:
    // -- Flash
    // mensagem -> campo
    session()->flash('mensagem', 'Tipo de transferencia inserida com sucesso!');

    //return redirect('/aparelhos');
    return redirect()->route('tipos.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\tipos  $tipos
  * @return \Illuminate\Http\Response
  */
  public function show(tipos $tipos)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\tipos  $tipos
  * @return \Illuminate\Http\Response
  */
  public function edit(tipos $tipos)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\tipos  $tipos
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, tipos $tipos)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\tipos  $tipos
  * @return \Illuminate\Http\Response
  */
  public function destroy(tipos $tipos)
  {
    //
  }
}
