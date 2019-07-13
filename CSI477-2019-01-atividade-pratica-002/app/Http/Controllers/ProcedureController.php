<?php

namespace App\Http\Controllers;
use App\Procedure;
use App\Test;
use Illuminate\Http\Request;
use\ Illuminate\Support\Facades\Auth;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



      $procedures = Procedure::all();
    // View -> apresentar
    return view('procedures.index')
            ->with('procedures', $procedures);
    }


public function MostrarAoUsuario(){
  $procedures = Procedure::all();
// View -> apresentar
return view('procedures.MostrarAoUsuario')
        ->with('procedures', $procedures);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if ( Auth::check() ) {
              if ( Auth::user()->id == 1 )

                return view('procedures.create');
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
     public function store(Request $request)
 {
     //dd($request->all());
     // Validação - check up
     // Ok?
     // Gravar
     //return ($request->nome);
     //return ($request->input('nome'));
     // Opção 01:
     // $estado = new Estado;
     // $estado->nome = $request->nome;
     // $estado->sigla = $request->sigla;
     //
     // $estado->save();
     // Opção 02:


       Procedure::create($request->all());
       // Mensagem de sucesso:
       // -- Flash
       // mensagem -> campo
       session()->flash('mensagem', 'procedimento inserido com sucesso!');
       //return redirect('/estados');
       return redirect()->route('procedures.index');

 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedure)
    {
      return view('procedures.show')
          ->with('procedure', $procedure);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedure $procedure)
    {

      if ( Auth::check() ) {
              if ( Auth::user()->id == 1 )

              return view('procedures.edit')
                      ->with('procedure', $procedure);
              }
              else {
                return redirect()->route('home');
  }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedure $procedure)
    {

      if ( Auth::check() ) {
              if ( Auth::user()->id == 1 )

              $procedure->fill($request->all());
            // Para ambas as opções:
            $procedure->save();
            session()->flash('mensagem', 'Estado atualizado com sucesso!');
            return redirect()->route('procedures.show', $procedure->id);

              }
              else {
                return redirect()->route('home');
  }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedure $procedure)
    {

      if ( Auth::check() ) {
              if ( Auth::user()->id == 1 )

      $procedure->delete();
      session()->flash('mensagem', 'Procedimento excluido com sucesso!');
      return redirect()->route('procedures.index');
    }

  else {
    return redirect()->route('home');
}
}
}
