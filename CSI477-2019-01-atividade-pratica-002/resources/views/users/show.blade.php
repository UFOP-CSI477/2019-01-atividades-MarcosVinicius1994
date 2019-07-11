@extends('principal')

@section('titulo', 'Exibir Usuario')

@section('conteudo')





  @foreach ($procedures as $p)
       @if($p->user_id == $users->id)
         <div class="container col-mt-12">
         <div class="table-responsive">
         <table class="table">
           <thead>
             <tr>
               <th>Id do paciente</th>
               <th>Nome do paciente</th>
               <th>Nome do procedimento</th>
               <th>Preco</th>
               <th>ID do procedimento</th>
               <th>ID do usuario em procedimento</th>
             </tr>
           </thead>
           <tbody>

           <td>ID:{{ $users->id }}</td>
           <td>Nome: {{ $users->name }}</td>
           <td>Procedimento: {{ $p->name}}</td>
           <td>Preco{{$p->price}} </td>
           <td>Id do procedimento:{{ $p->id }} </td>
           <td>Id do usuario em procedimento:{{ $p->user_id }} </td>
         </tbody>
         </table>
         </div>
         </div>

         @endif

   @endforeach

<div class="container col-ml-23">
<a  class="btn btn-secondary" href="{{ route('users.index') }}">Voltar</a>
<a class="btn-btn-primary" href="{{ route('users.edit', $users->id) }}">Editar</a>

<div class="col-md-12">
   <form method="post" action="{{ route('users.destroy', $users->id) }}" onsubmit="return confirm('Confirma exclusão do Usuario?');" >

     @csrf
     @method('DELETE')
     <input type="submit" value="Excluir">
   </div>
   </form>
 </div>













@endsection
