<?php

namespace App\Http\Controllers;

use App\clientes;
use App\Trans;
use App\tipos;
use Illuminate\Http\Request;

class TransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trans = Trans::all();
        return view('trans.index')
           ->with('trans',$trans);
    }

    public function RecuperaIDclienteTrans( Trans $trans){
      return view('trans.clientesTrans')
         ->with('trans',$trans);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(trans $trans)
    {


      // $clientes = clientes::where('cliente_id', $trans->id);
      // $tipos = tipos::where('tipo_id', $trans->id);
      //    return view('trans.create')
      //      ->with('tipos',$tipos)
      //      ->with('clientes',$clientes);
      $clientes = clientes::orderBy('nome')->get();
      $tipos = tipos::orderBy('nome')->get();

        return view('trans.create')
        ->with('tipos',$tipos)
        ->with('clientes', $clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $trans)
    {

      Trans::create($trans->all());

      // Mensagem de sucesso:
      // -- Flash
      // mensagem -> campo
      session()->flash('mensagem', 'Transferencia inserida com sucesso!');

      //return redirect('/aparelhos');
      return redirect()->route('trans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trans  $trans
     * @return \Illuminate\Http\Response
     */
    public function show(trans $trans)
    {
      return view('trans.show')
      ->with('trans', $trans);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trans  $trans
     * @return \Illuminate\Http\Response
     */
    public function edit(trans $trans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trans  $trans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trans $trans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trans  $trans
     * @return \Illuminate\Http\Response
     */
    public function destroy(trans $trans)
    {
        //
    }

    // public function recuperaId(int $id ){
    //     $trans = Trans::where('cliente_id', $id);
    //        return view('trans.clientesTrans')
    //          ->with('trans',$trans);
    //
    // }



}
