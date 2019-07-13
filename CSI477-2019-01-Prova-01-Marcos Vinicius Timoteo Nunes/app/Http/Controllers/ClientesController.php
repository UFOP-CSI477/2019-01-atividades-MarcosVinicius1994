<?php

namespace App\Http\Controllers;


use App\Trans;
use App\clientes;
use Illuminate\Http\Request;
use\ Illuminate\Support\Facades\Auth;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = clientes::orderBy('nome')->get();
        return view('clientes.index')
             ->with('clientes',$clientes);
    }

    public function recuperaIDcliente(){
      $trans = Trans::all();
      $clientes = clientes::all();
      return view('clientes.RelatorioTrans')
           ->with('trans',$trans)
           ->with('clientes',$clientes);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      if ( Auth::check() ) {
                return view('clientes.criacao');
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
    public function store(Request $clientes)
    {
      clientes::create($clientes->all());

      // Mensagem de sucesso:
      // -- Flash
      // mensagem -> campo
      session()->flash('mensagem', 'Cliente inserido com sucesso!');

      //return redirect('/aparelhos');
      return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $clientes)
    {
        //
    }


    public function VerRelatorioClientes(){
      return view('trans.clientesTrans');
    }





}
