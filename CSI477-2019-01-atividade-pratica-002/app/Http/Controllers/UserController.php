<?php

namespace App\Http\Controllers;

use App\Procedure;
use App\User;
use Illuminate\Http\Request;
use\ Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function DadosADM(){
       if ( Auth::check() ) {
               if ( Auth::user()->id == 1 )
       $Users = User::all();
       return view('admin.adm')
       ->with('admin',$Users);

     } else{
         return redirect()->route('home');

       }
     }
     public function index()
       {
           //
             // Model -> recuperação dos dados
           //orderBy('nome')->get();
           if ( Auth::check() ) {
                   if ( Auth::user()->id == 1 )
           $usuarios = User::orderBy('name')->get();
           // View -> apresentar
           return view('users.index')
                   ->with('usuarios', $usuarios);
}else{
  return redirect()->route('home');

}
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
           return view('users.create');
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
         User::create($request->all());
         // Mensagem de sucesso:
         // -- Flash
         // mensagem -> campo
         session()->flash('mensagem', 'Usuario inserido com sucesso!');
         //return redirect('/estados');
         return redirect()->route('users.index');
       }
       /**
        * Display the specified resource.
        *
        * @param  \App\User $user
        * @return \Illuminate\Http\Response
        */
       public function show(User $user)
       {

           // $users = user::all();
           $procedures = Procedure::all();
           return view('users.show')
                  ->with('users', $user)
                  ->with('procedures', $procedures);
       }
       /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\User $user
        * @return \Illuminate\Http\Response
        */
       public function edit(User $user)
       {
           //
           if ( Auth::check() ) {
                   if ( Auth::user()->id == 1 )
           return view('users.edit')
           ->with('user', $user);
}else{
   return redirect()->route('home');
}
       }
       /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\User $user
        * @return \Illuminate\Http\Response
        */
       public function update(Request $request, User $user)
       {
           //
           if ( Auth::check() ) {
                   if ( Auth::user()->id == 1 )
           $user->fill($request->all());
           //para ambras as opções
           $user->save();
           session()->flash('mensagem', 'Usuario Atualizado com sucesso!');
           return redirect()->route('users.index');

         }else{
            return redirect()->route('home');
         }
       }
       /**
        * Remove the specified resource from storage.
        *
        * @param  \App\User $user
        * @return \Illuminate\Http\Response
        */
       public function destroy(User $user)
       {
           //
           if ( Auth::check() ) {
                   if ( Auth::user()->id == 1 )
           $user->delete();
           session()->flash('mensagem', 'Usuário excluido com sucesso !');
           return redirect()->route('users.index');
         }else{
            return redirect()->route('home');
         }

      }

}
